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
        <div class="main">
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
                    <img src="img/logo.png" alt="Image" />
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
