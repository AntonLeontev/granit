<script>
import Layout from "/resources/js/Layouts/AppLayout.vue";

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
	loc: String
})

const routeName = location.pathname.startsWith('/military/') ? 'military.product.show' : 'civil.product.show';
</script>

<template>
    <Layout>
        <div class="catalog" style="background-image: url(/img/catalog-bg.png)">
            <div class="catalog__header">
                <div class="catalog__title">военная продукция</div>
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
                        <div class="catalog-item__title">{{ product['title_'+loc] }}</div>
                    </div>
                </div>
            </div>
            <div class="catalog__footer">
                <div class="catalog-item__text">
                    <strong>АО “Концерн “Гранит-Электрон”</strong>
                </div>
                <div class="catalog-item__text">
                    Опыт. Профессионализм. История.
                </div>
            </div>
        </div>
    </Layout>
</template>
