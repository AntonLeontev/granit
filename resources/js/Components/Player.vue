<script setup>
import videojs from 'video.js';
import "video.js/dist/video-js.css";

import { onMounted, onBeforeUnmount } from "vue";

const props = defineProps({
    path: String,
});

let player;

onMounted(() => {
	player = videojs(document.querySelector('.video'), {
		autoplay: true,
		controls: true,
		muted: true,
		loop: true,
		bigPlayButton: false,
		controlBar: {
			fullscreenToggle: false,
			playToggle: false,
			children: {
                muteToggle: true,
                volumeBar: true,
                currentTimeDisplay: true,
                progressControl: true,
				remainingTimeDisplay: true,
            }
		},
		userActions: {
			click: false,
    		doubleClick: false,
  		}
	});
})
onBeforeUnmount(() => {
	if (player) {
		player.dispose();
	}
})


</script>

<template>
    <video class="video video-js vjs-fluid" :src="'/storage/'+props.path" ref="video"></video>
</template>

<style scoped>
</style>
