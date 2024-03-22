<script>
import Layout from "/resources/js/Layouts/AppLayout.vue";

export default {
    layout: Layout,
};
</script>

<script setup>
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";

const activeTab = ref("description");
</script>

<template>
    <Layout>
        <div class="product" style="background-image: url(/img/catalog-bg.png)">
            <div class="product__inner">
                <div class="product__model">
                    <div class="product__img -ibg">
                        <img src="/img/univer.jpg" alt="Image" />
                    </div>
                    <div class="control-panel">
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
                    </div>
                </div>
                <div class="product__parameters">
                    <div class="tabs" data-tabs="">
                        <div data-tabs-body class="tabs__content">
                            <div
                                class="tabs__body"
                                v-if="activeTab === 'description'"
                            >
                                <div class="product__title">
                                    Береговая стационарная РЛС контроля
                                    надводной обстановки «ИРТЫШ-3С»
                                </div>
                                <div class="product__content">description</div>
                            </div>
                            <div
                                class="tabs__body"
                                v-if="activeTab === 'table'"
                            >
                                <div class="product__title">
                                    Береговая стационарная РЛС контроля
                                    надводной обстановки «ИРТЫШ-3С»
                                </div>
                                <div class="product__content">table</div>
                            </div>
                            <div
                                class="tabs__body"
                                v-if="activeTab === 'video'"
                            >
                                <div class="product__title">
                                    Береговая стационарная РЛС контроля
                                    надводной обстановки «ИРТЫШ-3С»
                                </div>
                                <div class="product__content">
                                    video
                                    <!-- <ol class="video-list">
                                        <li>
                                            <div class="video-list__title">
                                                Сотрудничество с ВУЗами
                                            </div>
                                            <video class="video" controls>
                                                <source
                                                    src="video.webm"
                                                    type="video/webm"
                                                />
                                                <source
                                                    src="video.mp4"
                                                    type="video/mp4"
                                                />
                                                Ваш браузер не поддерживает
                                                встроенные видео :(
                                            </video>
                                        </li>
                                        <li>
                                            <div class="video-list__title">
                                                Сотрудничество с ВУЗами
                                            </div>
                                            <video class="video" controls>
                                                <source
                                                    src="video.webm"
                                                    type="video/webm"
                                                />
                                                <source
                                                    src="video.mp4"
                                                    type="video/mp4"
                                                />
                                                Ваш браузер не поддерживает
                                                встроенные видео :(
                                            </video>
                                        </li>
                                    </ol> -->
                                </div>
                            </div>
                        </div>
                        <div class="tabs-actions">
                            <div class="tabs-actions__header">
                                <Link
                                    :href="route('catalog.military')"
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
                                    id="scroll-up-button"
                                    type="button"
                                    class="tabs__title"
                                >
                                    <img
                                        src="/img/icons/arrow-two.svg"
                                        alt="Image"
                                    />
                                </button>
                                <button
                                    id="scroll-down-button"
                                    type="button"
                                    class="tabs__title"
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
