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
        <div class="catalog" style="background-image: url(/img/catalog-bg.png)">
            <div class="catalog__header">
                <div class="catalog__title">военная продукция</div>
            </div>
            <div class="catalog__body">
                <div class="catalog__items">
                    <div class="catalog-item">
                        <Link
                            class="stretched-link"
                            :href="route('catalog.product')"
                        ></Link>
                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/01.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">РЛС ЦУ 3Ц-25Э</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/02.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">КАСУ</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/03.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">ГСН Яхонт</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/04.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">КРМ-66Э</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/05.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">«Пурга»</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/06.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">НАСУ</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/07.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">РЛС МЫС-М1Э</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/08.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">МРК-50УЭ</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/09.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">РЛС МР-10М1Э</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img
                                src="/img/catalog/military/10.jpg"
                                alt="Image"
                            />
                        </div>
                        <div class="catalog-item__title">
                            ВТС с зарубежными странами
                        </div>
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
