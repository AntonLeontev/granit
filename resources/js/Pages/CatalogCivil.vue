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
                <div class="catalog__title">Гражданская продукция</div>
            </div>
            <div class="catalog__body">
                <div class="catalog__items">
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>
                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/01.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">Арктика</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/02.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">РЛС «ИРТЫШ-3С»</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/03.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">РЛС «Иртыш-2РМ»</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/04.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">РЛС «ТЕРСА»</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/05.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">РЛС «PARAD 6X»</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/06.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">
                            Модельный ряд линейки «Океан»
                        </div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/07.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">
                            Ледовая приставка «Льдинка»
                        </div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/08.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">«Наномобиль»</div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/09.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">
                            Серводвигатели «БСЭПМ»
                        </div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/10.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">
                            Сотрудничество с ВУЗами
                        </div>
                    </div>
                    <div class="catalog-item">
                        <a class="stretched-link" href=""></a>

                        <div class="catalog-item__img -ibg">
                            <img src="/img/catalog/civil/11.jpg" alt="Image" />
                        </div>
                        <div class="catalog-item__title">
                            Тренажер «Парашютист»
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
