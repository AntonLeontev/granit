<script setup>
import { Link } from "@inertiajs/vue3";
import { usePage } from '@inertiajs/vue3'
import { router } from '@inertiajs/vue3'

const page = usePage()

function changeLang() {
	if (page.props.locale === 'ru') {
		page.props.locale = 'en'
	} else {
		page.props.locale = 'ru'
	}

	router.get(route('lang'), {}, {
		preserveState: true,
  		preserveScroll: true,
	})
}

document.addEventListener('touchmove', e => e.preventDefault());

</script>

<template>
    <!DOCTYPE html>
    <html :lang="page.props.locale">
        <head>
            <title>Гранит-Электрон</title>
            <meta charset="UTF-8" />
            <meta name="format-detection" content="telephone=no" />
            <!-- <style>body{opacity: 0;}</style> -->
            <link rel="shortcut icon" href="/favicon.ico" />
            <!-- <meta name="robots" content="noindex, nofollow"> -->
            <meta
                name="viewport"
                content="width=device-width, initial-scale=1.0, user-scalable=no"
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
                                            :href="route('catalog.civil')"
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
                                            :href="route('catalog.military')"
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
                                        <a :href="route('lang')" class="menu__link _lang" 
											v-if="page.props.locale === 'ru'"
											@click.prevent="changeLang"
										>en</a>
                                        <a :href="route('lang')" class="menu__link _lang" 
											v-if="page.props.locale === 'en'"
											@click.prevent="changeLang"
										>
											ru
										</a>
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
