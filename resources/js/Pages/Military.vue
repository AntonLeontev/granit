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
        <section
            class="hero"
            style="background-image: url(img/military-bg.jpg)"
        >
            <div class="hero__content">
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
