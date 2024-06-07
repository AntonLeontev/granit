<script>
import Layout from "/resources/js/Layouts/AppLayout.vue";

export default {
    layout: Layout,
};
</script>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <Layout>
		<div class="" style="position: absolute; background: linear-gradient(90deg, rgba(6,46,50,1) 0%, rgba(101,195,200,0) 100%); width: 100%; height: 100%;"></div>
        <section class="hero">
			<div class="main__video">
				<video loop="loop" autoplay muted>
					<source src="/img/video/video_military.webm" type="video/webm">
					<source src="/img/video/video_military.mp4" type="video/mp4">
				</video>
			</div>
            <div class="hero__content" style="position: relative;">
                <h2 class="hero__title">
                    {{ __('pages.military.title') }}
                </h2>
                <div class="hero__text">
                    {{ __('pages.military.text') }}
                </div>
                <div class="hero__actions">
                    <Link :href="route('catalog.military')" class="button"
                        >{{ __('pages.military.1') }}</Link
                    >
                    <Link :href="route('home')" class="button button_outline"
                        >{{ __('pages.military.2') }}</Link
                    >
                </div>
            </div>
        </section>
    </Layout>
</template>
