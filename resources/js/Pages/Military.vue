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
                    Продукция <br />
                    военного назначения
                </h2>
                <div class="hero__text">
                    На протяжении многих лет предприятие создает принципиально
                    новые виды военной техники и вооружений. Военно-Морскому
                    Флоту переданы десятки уникальных комплексов, которыми
                    оснащены корабли практически всех классов, в том числе
                    тяжелый крейсер «Петр Великий», авианесущий корабль «Адмирал
                    Кузнецов», противолодочные корабли типа «Адмирал Чабаненко»,
                    атомные подводные лодки типа «Акула», «Антей», «Борей»,
                    «Ясень», а также объекты берегового базирования.
                </div>
                <div class="hero__actions">
                    <Link :href="route('catalog.military')" class="button"
                        >Каталог продукции</Link
                    >
                    <Link :href="route('home')" class="button button_outline"
                        >На главную</Link
                    >
                </div>
            </div>
        </section>
    </Layout>
</template>
