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

</script>

<template>
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
                                        <a
                                            :href="route('home')"
                                            class="menu__link"
                                        >
                                            <img
                                                src="/img/icons/home.svg"
                                                width="50"
                                                alt="Image"
                                            />
                                        </a>
                                    </li>
                                    <li
                                        class="menu__item"
                                        :class="{
                                            _active:
                                                $page.url.startsWith('/civil'),
                                        }"
                                    >
                                        <a
                                            :href="route('catalog.civil')"
                                            class="menu__link"
                                        >
                                            <img
                                                src="/img/icons/compass.svg"
                                                width="50"
                                                alt="Image"
                                            />
                                        </a>
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
                                        <a
                                            :href="route('catalog.military')"
                                            class="menu__link"
                                        >
                                            <img
                                                src="/img/icons/chart.svg"
                                                width="50"
                                                alt="Image"
                                            />
                                        </a>
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
</template>
