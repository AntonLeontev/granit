<script setup>
import { Link } from "@inertiajs/vue3";
import { ref, onMounted, onBeforeUpdate } from "vue";
let contentTrigger = ref(false);

onMounted(() => {
    contentTrigger = true;
});

// onBeforeUpdate(() => {
//     contentTrigger = false;

//     // Wait for the DOM to re-render and then show the new content after the "leave" transition is over.
//     $nextTick(() => {
//         setTimeout(() => {
//             contentTrigger = true;
//         }, 800);
//     });
// });
</script>

<template>
    <!DOCTYPE html>
    <html lang="ru">
        <head>
            <title>Главная</title>
            <meta charset="UTF-8" />
            <meta name="format-detection" content="telephone=no" />
            <!-- <style>body{opacity: 0;}</style> -->
            <link rel="shortcut icon" href="favicon.ico" />
            <!-- <meta name="robots" content="noindex, nofollow"> -->
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1.0"
            />
        </head>

        <body>
            <div class="wrapper">
                <header class="header">
                    <div class="header__container">
                        <div class="header__menu menu">
                            <nav class="menu__body">
                                <ul class="menu__list">
                                    <li
                                        class="menu__item"
                                        :class="{
                                            _active: $page.component === 'Home',
                                        }"
                                    >
                                        <Link
                                            :href="route('home')"
                                            class="menu__link"
                                        >
                                            <img
                                                src="/img/icons/home.svg"
                                                width="50"
                                                alt="Image"
                                            />
                                        </Link>
                                    </li>
                                    <li
                                        class="menu__item"
                                        :class="{
                                            _active:
                                                $page.url.startsWith('/civil'),
                                        }"
                                    >
                                        <Link
                                            :href="route('civil')"
                                            class="menu__link"
                                        >
                                            <img
                                                src="/img/icons/compass.svg"
                                                width="50"
                                                alt="Image"
                                            />
                                        </Link>
                                    </li>
                                    <li
                                        class="menu__item"
                                        :class="{
                                            _active:
                                                $page.url.startsWith(
                                                    '/military'
                                                ),
                                        }"
                                    >
                                        <Link
                                            :href="route('military')"
                                            class="menu__link"
                                        >
                                            <img
                                                src="/img/icons/chart.svg"
                                                width="50"
                                                alt="Image"
                                            />
                                        </Link>
                                    </li>
                                    <li
                                        class="menu__item"
                                        :class="{
                                            _active:
                                                $page.component === 'Contacts',
                                        }"
                                    >
                                        <Link
                                            :href="route('contacts')"
                                            class="menu__link"
                                        >
                                            <img
                                                src="/img/icons/address.svg"
                                                width="50"
                                                alt="Image"
                                            />
                                        </Link>
                                    </li>
                                </ul>
                                <ul class="menu__list">
                                    <li class="menu__item">
                                        <a href="#" class="menu__link _lang"
                                            >RU</a
                                        >
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </header>

                <main class="page">
                    <slot></slot>
                </main>

                <footer class="footer">
                    <div class="footer__container"></div>
                </footer>
            </div>
        </body>
    </html>
</template>
