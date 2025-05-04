<script>
import Layout from "/resources/js/Layouts/AppLayout.vue";

export default {
    layout: Layout,
};
</script>

<script setup>
import { Link } from "@inertiajs/vue3";

function start(withMilitary) {
	sessionStorage.setItem('military_enabled', withMilitary);

	location.href = '/';
}
</script>

<template>
    <Layout>
		<div class="catalog" style="background-image: url(/img/catalog-bg.png); display:flex; justify-content: center; align-items: center;">
			<div style="">
				<div style="margin-bottom: 15px;text-align:center">Выберите режим работы:</div>

				<button class="button button_outline " style="margin-bottom:15px;padding-left:10px;padding-right:10px"
					@click="start(false)"
				>Без военной продукции</button>
				<button class="button button_outline" style="margin-bottom:15px;padding-left:10px;padding-right:10px;width:100%"
					@click="start(true)"
				>С военной продукцией</button>
			</div>
		</div>
    </Layout>
</template>
