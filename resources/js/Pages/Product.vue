<script>
import Layout from "/resources/js/Layouts/AppLayout.vue";

export default {
    layout: Layout,
};
</script>

<script setup>
import { Link, usePage } from "@inertiajs/vue3";
import { ref } from "vue";
import Model from "/resources/js/Components/Model.vue"

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
                    <!-- <div class="control-panel" >
                        <button
                            type="button"
                            class="control-panel__item _reverse"
                        >
                            <img
                                src="/img/icons/arrow-two_accent.svg"
                                alt="Image"
                            />
                        </button>
                        <button type="button" class="control-panel__item">
                            <img
                                src="/img/icons/arrow-two_accent.svg"
                                alt="Image"
                            />
                        </button>
                        <button type="button" class="control-panel__item">
                            <img src="/img/icons/loop-plus.svg" alt="Image" />
                        </button>
                        <button type="button" class="control-panel__item">
                            <img src="/img/icons/loop-minus.svg" alt="Image" />
                        </button>
                        <button type="button" class="control-panel__item">
                            <img src="/img/icons/repeat.svg" alt="Image" />
                        </button>
                    </div> -->
                </div>
                <div class="product__parameters">
                    <div class="tabs" data-tabs="">
                        <div data-tabs-body class="tabs__content">
                            <div
                                class="tabs__body"
                                v-if="activeTab === 'description'"
                            >
                                <div class="product__title">
                                    {{ product['title_' + page.props.locale] }}
                                </div>
                                <div class="product__content" v-html="product['description_' + page.props.locale]" ref="description"></div>
                            </div>
                            <div
                                class="tabs__body"
                                v-if="activeTab === 'table'"
                            >
                                <div class="product__title">
                                    {{ product['title_' + page.props.locale] }}
                                </div>
                                <div class="product__content" v-html="product['characteristics_' + page.props.locale]" ref="table"></div>
                            </div>
                            <div
                                class="tabs__body"
                                v-if="activeTab === 'video'"
                            >
                                <div class="product__title">
                                    {{ product['title_' + page.props.locale] }}
                                </div>
                                <div class="product__content" ref="video">
                                    <ol class="video-list">
                                        <li v-for="video in product.videos">
                                            <div class="video-list__title">
                                                {{ video['title_'+page.props.locale] }}
                                            </div>
                                            <video class="video" :src="'/storage/'+video.path" controls>
                                                <!-- <source
                                                    src="video.webm"
                                                    type="video/webm"
                                                />
                                                <source
                                                    src="video.mp4"
                                                    type="video/mp4"
                                                /> -->
                                            </video>
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
									v-if="product.videos_count > 0"
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
