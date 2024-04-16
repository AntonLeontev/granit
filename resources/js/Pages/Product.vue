<script>
import Layout from "/resources/js/Layouts/AppLayout.vue";

export default {
    layout: Layout,
};
</script>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import Model from "/resources/js/Components/Model.vue"
import Player from "/resources/js/Components/Player.vue"

const page = usePage()

defineProps({ 
	product: Object,
	loc: String
})

const appointment = location.pathname.startsWith('/military/') ? 'military' : 'civil';
const routeName =  'catalog.' + appointment;


const activeTab = ref("description");

const description = ref(null)
const table = ref(null)
const video = ref(null)

const tabs = {description, table, video}

function scrollUp() {
	let elem = tabs[activeTab.value].value

	elem.scroll({
		top: elem.scrollTop - 200,
		behavior: "smooth",
	});
}
function scrollDown() {
	let elem = tabs[activeTab.value].value

	elem.scroll({
		top: elem.scrollTop + 200,
		behavior: "smooth",
	});
}
</script>

<template>
    <Layout>
        <div class="product" style="background-image: url(/img/catalog-bg.png)">
            <div class="product__inner">
                <div class="product__model">
                    <div class="product__img -ibg" v-if="product['3d_model'] === null">
                        <img :src="'/storage/' + product.image" alt="Image" />
                    </div>

					<Model :path="product['3d_model']" />
                </div>
                <div class="product__parameters">
                    <div class="tabs" data-tabs="">
                        <div data-tabs-body class="tabs__content">
                            <div
                                class="tabs__body"
                                
                            >
                                <div class="product__title">
                                    {{ product['title_' + page.props.locale] }}
                                </div>
                                <div v-show="activeTab === 'description'" class="product__content" v-html="product['description_' + page.props.locale]" ref="description"></div>
								<div v-show="activeTab === 'table'" class="product__content" v-html="product['characteristics_' + page.props.locale]" ref="table"></div>
								<div v-if="activeTab === 'video'" class="product__content" ref="video">
                                    <ol class="video-list">
                                        <li>
                                            <div class="video-list__title">
                                                {{ product.video['title_'+page.props.locale] }}
                                            </div>
											<div>
												<Player :path="product.video['path_'+page.props.locale]" />
											</div>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-actions">
                            <div class="tabs-actions__header">
                                <Link
                                    :href="route(routeName)"
                                    class="tabs__title"
                                >
                                    <img
                                        src="/img/icons/close.svg"
                                        alt="Image"
                                    />
                                </Link>
                            </div>
                            <nav data-tabs-titles class="tabs__navigation">
                                <button
                                    type="button"
                                    class="tabs__title"
                                    :class="{
                                        '_tab-active':
                                            activeTab === 'description',
                                    }"
                                    @click="activeTab = 'description'"
                                >
                                    <img
                                        src="/img/icons/clip.svg"
                                        alt="Image"
                                    />
                                </button>
                                <button
                                    type="button"
                                    class="tabs__title"
									v-if="product['characteristics_' + page.props.locale] != null && product['characteristics_' + page.props.locale] != ''"
                                    :class="{
                                        '_tab-active': activeTab === 'table',
                                    }"
                                    @click="activeTab = 'table'"
                                >
                                    <img
                                        src="/img/icons/chartbar.svg"
                                        alt="Image"
                                    />
                                </button>
                                <button
                                    type="button"
                                    class="tabs__title"
									v-if="product.video_count > 0"
                                    :class="{
                                        '_tab-active': activeTab === 'video',
                                    }"
                                    @click="activeTab = 'video'"
                                >
                                    <img
                                        src="/img/icons/monitor.svg"
                                        alt="Image"
                                    />
                                </button>
                            </nav>
                            <div class="tabs-actions__footer">
                                <button
                                    type="button"
                                    class="tabs__title"
									@click="scrollUp"
                                >
                                    <img
                                        src="/img/icons/arrow-two.svg"
                                        alt="Image"
                                    />
                                </button>
                                <button
                                    type="button"
                                    class="tabs__title"
									@click="scrollDown"
                                >
                                    <img
                                        src="/img/icons/arrow-two.svg"
                                        alt="Image"
                                    />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>
