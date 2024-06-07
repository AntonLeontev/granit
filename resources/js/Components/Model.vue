<script setup>
import * as THREE from "three";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader";
import { onMounted, onBeforeUnmount } from "vue";

import init from "/resources/js/init.js";

const props = defineProps({
    path: String,
});

let resizeHandler;

onMounted(() => {
	if (props.path === null) return;
	if (props.path === '') return;

	const { sizes, camera, scene, canvas, controls, renderer, container } = init();

	let loader = new GLTFLoader();
	loader.load(
	    "/storage/" + props.path,
	    function (gltf) {
	        scaleToFit(gltf.scene, new THREE.Vector3(3.2, 3, 3.2));

			let box = new THREE.Box3().setFromObject( gltf.scene );
			let center = new THREE.Vector3();
			box.getCenter(center);
			gltf.scene.position.sub(center);

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

	resizeHandler = () => {
		// Обновляем размеры
		sizes.width = container.getBoundingClientRect().width;
		sizes.height = container.getBoundingClientRect().height;

		// Обновляем соотношение сторон камеры
		camera.aspect = sizes.width / sizes.height;
		camera.updateProjectionMatrix();

		// Обновляем renderer
		renderer.setSize(sizes.width, sizes.height);
		renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
		renderer.render(scene, camera);
	}

	/** Базовые обпаботчики событий длы поддержки ресайза */
	window.addEventListener("resize", resizeHandler);
})

onBeforeUnmount(() => {
	if (resizeHandler) {
		window.removeEventListener("resize", resizeHandler);
	}
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
