<script>
import Layout from "/resources/js/Layouts/AppLayout.vue";

export default {
    layout: Layout,
};
</script>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage()

const withMilitary = sessionStorage.getItem('military_enabled') === 'true';

</script>

<template>
    <Layout>
        <div class="main">
			<div class="main__video">
				<video loop="loop" autoplay muted v-if="withMilitary">
					<source src="/img/video/video-bg.webm" type="video/webm">
					<source src="/img/video/video-bg.mp4" type="video/mp4">
				</video>
				<video loop="loop" autoplay muted v-if="!withMilitary">
					<!-- <source src="/img/video/video-bg.webm" type="video/webm"> -->
					<source src="/img/video/video_bg_civil.mp4" type="video/mp4">
				</video>
			</div>
            <Link :href="route('civil')" class="main__side main__full" v-if="!withMilitary">
                <div class="main__title">{{ __('pages.home.civil') }}</div>
            </Link>
            <Link :href="route('civil')" class="main__side main__left" v-if="withMilitary">
                <div class="main__title">{{ __('pages.home.civil') }}</div>
            </Link>
            <Link :href="route('military')" class="main__side main__right" v-if="withMilitary">
                <div class="main__title">{{ __('pages.home.military') }}</div>
            </Link>
            <div class="logo" v-if="withMilitary">
                <div class="logo-arrow logo__item">
                    <img
                        src="img/icons/arrow-two.svg"
                        width="100"
                        alt="Image"
                    />
                </div>
                <div class="logo__item">
                    <img v-if="page.props.locale === 'ru'" src="img/logo_ru.svg" alt="Image" /> 
					<img v-if="page.props.locale === 'en'" src="img/logo_en.svg" alt="Image" />
                </div>
                <div class="logo-arrow logo__item">
                    <img
                        src="img/icons/arrow-two.svg"
                        width="100"
                        alt="Image"
                    />
                </div>
            </div>
        </div>
    </Layout>
</template>
