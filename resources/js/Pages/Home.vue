<script>
import Layout from "/resources/js/Layouts/AppLayout.vue";

export default {
    layout: Layout,
};
</script>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";

const page = usePage()

console.log(page.props.locale);
</script>

<template>
    <Layout>
        <div class="main">
			<div class="main__video">
				<video loop="loop" autoplay muted>
					<source src="/img/video/video-bg.mp4" type="video/mp4">
				</video>
			</div>
            <Link :href="route('civil')" class="main__side main__left">
                <div class="main__title">{{ __('pages.home.civil') }}</div>
            </Link>
            <Link :href="route('military')" class="main__side main__right">
                <div class="main__title">{{ __('pages.home.military') }}</div>
            </Link>
            <div class="logo">
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
