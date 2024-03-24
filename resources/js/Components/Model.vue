<script setup>
import * as THREE from "three";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader";
import { onMounted } from "vue";

import init from "/resources/js/init.js";

const props = defineProps({
    path: String,
});

onMounted(() => {
	if (props.path === null) return;
	if (props.path === '') return;

	const { sizes, camera, scene, canvas, controls, renderer } = init();

	camera.position.z = 3;

	const loader = new GLTFLoader();
	let model;
	console.log(props.path);
	loader.load(
	    "/storage/" + props.path,
	    function (gltf) {
	        scaleToFit(gltf.scene, new THREE.Vector3(4, 3, 4.5));

	        model = gltf.scene;
	        console.log("Модель загружена");
	        let b = new THREE.Box3().setFromObject(gltf.scene);
	        // gltf.scene.position.sub(b.getCenter()); // центрируем
	        // gltf.scene.children[0].scale.set(2, 2, 2);
	        scene.add(gltf.scene);
	    },
	    undefined,
	    function (error) {
	        console.error(error);
	    }
	);

	const tick = () => {
		controls.update();
		renderer.render(scene, camera);
		window.requestAnimationFrame(tick);
	};
	tick();

	/** Базовые обпаботчики событий длы поддержки ресайза */
	window.addEventListener("resize", () => {
		// Обновляем размеры
		sizes.width = window.innerWidth;
		sizes.height = window.innerHeight;

		// Обновляем соотношение сторон камеры
		camera.aspect = sizes.width / sizes.height;
		camera.updateProjectionMatrix();

		// Обновляем renderer
		renderer.setSize(sizes.width, sizes.height);
		renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
		renderer.render(scene, camera);
	});

	// window.addEventListener("dblclick", () => {
	// 	if (!document.fullscreenElement) {
	// 		canvas.requestFullscreen();
	// 	} else {
	// 		document.exitFullscreen();
	// 	}
	// });
})


function scaleToFit(obj, bound) {
    let box = new THREE.Box3().setFromObject(obj);
    let size = new THREE.Vector3();
    box.getSize(size);
    let vScale = new THREE.Vector3().copy(bound).divide(size);
    let scale = Math.min(vScale.x, Math.min(vScale.y, vScale.z));
    obj.scale.setScalar(scale);
}
</script>

<template>
    <canvas class="canvas"></canvas>
</template>

<style scoped>
.canvas {
	max-width: 100%;
	max-height: 100%;
}
</style>
