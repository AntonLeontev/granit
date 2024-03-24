<script>
import Layout from "/resources/js/Layouts/AppLayout.vue";
import { usePage } from '@inertiajs/vue3'

const page = usePage()

export default {
    layout: Layout,
};
</script>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({ 
	products: {
		type: Array,
		default: [],
	},
})

const appointment = location.pathname.startsWith('/military/') ? 'military' : 'civil';
const routeName = appointment + '.product.show';
</script>

<template>
    <Layout>
        <div class="catalog" style="background-image: url(/img/catalog-bg.png)">
            <div class="catalog__header">
                <div class="catalog__title">{{ __(`pages.${appointment}_catalog.h1`) }}</div>
            </div>
            <div class="catalog__body">
                <div class="catalog__items">
                    <div class="catalog-item" v-for="product in products" :key="product.id">
                        <Link
                            class="stretched-link"
                            :href="route(routeName, product.id)"
                        ></Link>
                        <div class="catalog-item__img -ibg">
                            <img
                                :src="'/storage/' + product.image"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">{{ product['title_'+page.props.locale] }}</div>
                    </div>
                </div>
            </div>
            <div class="catalog__footer">
                <div class="catalog-item__text">
                    <strong>{{ __(`pages.${appointment}_catalog.footer1`) }}</strong>
                </div>
                <div class="catalog-item__text">
                    {{ __(`pages.${appointment}_catalog.footer2`) }}
                </div>
            </div>
        </div>
    </Layout>
</template>
