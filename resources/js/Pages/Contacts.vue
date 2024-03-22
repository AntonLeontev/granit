<script setup>
import AppLayout from "../Layouts/AppLayout.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <AppLayout>
        <div class="product" style="background-image: url(/img/catalog-bg.png)">
            <div class="contacts-wrapper">
                <div
                    class="logo-contact _submenu-open"
                    hidden="hidden"
                    data-submenu="1"
                >
                    <div class="logo-contact__block">
                        <div class="contacts-content">
                            <div class="contacts-content__header">
                                <div class="contacts-content__title">
                                    Контакты
                                </div>
                                <div class="contacts-content__label">
                                    АО «Концерн <br />
                                    «Гранит-Электрон»
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/map.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        191014, Россия, Санкт-Петербург, ул.
                                        Госпитальная, д. 3(вход с Греческого
                                        пр., д. 31)
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/phone.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Телефон:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 271-74-94</p>
                                        <p>+7 812 578-94-86</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/envelope.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Электронный адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        office@granit-electron.ru
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/browser.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Корпоративный сайт:
                                    </div>
                                    <div class="info-contact__value">
                                        https://www.granit-electron.ru/
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button
                                    class="contacts-logo-item contacts-logo-item_main"
                                    data-parent="1"
                                    type="button"
                                >
                                    <img src="/img/brands/01.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_01"
                                    data-parent="2"
                                    type="button"
                                >
                                    <img src="/img/brands/02.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_02"
                                    data-parent="3"
                                    type="button"
                                >
                                    <img src="/img/brands/03.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_3"
                                    data-parent="4"
                                    type="button"
                                >
                                    <img src="/img/brands/04.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_4"
                                    data-parent="5"
                                    type="button"
                                >
                                    <img src="/img/brands/05.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_5"
                                    data-parent="6"
                                    type="button"
                                >
                                    <img src="/img/brands/06.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_6"
                                    data-parent="7"
                                    type="button"
                                >
                                    <img src="/img/brands/07.jpg" alt="Image" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-contact" hidden="hidden" data-submenu="2">
                    <div class="logo-contact__block">
                        <div class="contacts-content">
                            <div class="contacts-content__header">
                                <div class="contacts-content__title">
                                    Контакты
                                </div>
                                <div class="contacts-content__label">
                                    АО «Завод имени А. А. Кулакова»
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/map.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        Россия, 197198, Санкт-Петербург, ул.
                                        Яблочкова, д.12
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/phone.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Телефон:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 233-29-02</p>
                                        <p>+7 812 232-89-26</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/envelope.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Электронный адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        office@zavodkulakova.ru
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/browser.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Корпоративный сайт:
                                    </div>
                                    <div class="info-contact__value">
                                        https://www.granit-srz.ru/
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button
                                    class="contacts-logo-item contacts-logo-item_main"
                                    data-parent="2"
                                    type="button"
                                >
                                    <img src="/img/brands/02.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_01"
                                    data-parent="1"
                                    type="button"
                                >
                                    <img src="/img/brands/01.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_02"
                                    data-parent="3"
                                    type="button"
                                >
                                    <img src="/img/brands/03.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_3"
                                    data-parent="4"
                                    type="button"
                                >
                                    <img src="/img/brands/04.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_4"
                                    data-parent="5"
                                    type="button"
                                >
                                    <img src="/img/brands/05.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_5"
                                    data-parent="6"
                                    type="button"
                                >
                                    <img src="/img/brands/06.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_6"
                                    data-parent="7"
                                    type="button"
                                >
                                    <img src="/img/brands/07.jpg" alt="Image" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-contact" hidden="hidden" data-submenu="3">
                    <div class="logo-contact__block">
                        <div class="contacts-content">
                            <div class="contacts-content__header">
                                <div class="contacts-content__title">
                                    Контакты
                                </div>
                                <div class="contacts-content__label">
                                    АО «РАВЕНСТВО-СЕРВИС»
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/map.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        Россия, 198099, Санкт-Петербург, <br />
                                        ул. Промышленная, д. 19
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/phone.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Телефон:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 252-92-00</p>
                                        <p>+7 812 252-92-26</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/envelope.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Электронный адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        rs@rawenstvo.ru
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/browser.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Корпоративный сайт:
                                    </div>
                                    <div class="info-contact__value">
                                        www.zavodkulakova.ru
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button
                                    class="contacts-logo-item contacts-logo-item_main"
                                    data-parent="3"
                                    type="button"
                                >
                                    <img src="/img/brands/03.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_01"
                                    data-parent="2"
                                    type="button"
                                >
                                    <img src="/img/brands/02.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_02"
                                    data-parent="1"
                                    type="button"
                                >
                                    <img src="/img/brands/01.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_3"
                                    data-parent="4"
                                    type="button"
                                >
                                    <img src="/img/brands/04.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_4"
                                    data-parent="5"
                                    type="button"
                                >
                                    <img src="/img/brands/05.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_5"
                                    data-parent="6"
                                    type="button"
                                >
                                    <img src="/img/brands/06.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_6"
                                    data-parent="7"
                                    type="button"
                                >
                                    <img src="/img/brands/07.jpg" alt="Image" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-contact" hidden="hidden" data-submenu="4">
                    <div class="logo-contact__block">
                        <div class="contacts-content">
                            <div class="contacts-content__header">
                                <div class="contacts-content__title">
                                    Контакты
                                </div>
                                <div class="contacts-content__label">
                                    АО «РАВЕНСТВО-СЕРВИС»
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/map.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        Россия, 198099, Санкт-Петербург, <br />
                                        ул. Промышленная, д. 19
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/phone.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Телефон:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 252-92-00</p>
                                        <p>+7 812 252-92-26</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/envelope.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Электронный адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        rs@rawenstvo.ru
                                    </div>
                                </div>
                                <!--                                <div class="info-contact">-->
                                <!--                                    <div class="info-contact__label">-->
                                <!--                                        <img src="/img/icons/social/browser.svg" width="32" alt="Image"-->
                                <!--                                             class="info-contact__icon">-->
                                <!--                                        Корпоративный сайт:-->
                                <!--                                    </div>-->
                                <!--                                    <div class="info-contact__value">-->
                                <!--                                        https://www.rawenstvo.ru/-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button
                                    class="contacts-logo-item contacts-logo-item_main"
                                    data-parent="4"
                                    type="button"
                                >
                                    <img src="/img/brands/04.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_01"
                                    data-parent="2"
                                    type="button"
                                >
                                    <img src="/img/brands/02.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_02"
                                    data-parent="3"
                                    type="button"
                                >
                                    <img src="/img/brands/03.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_3"
                                    data-parent="1"
                                    type="button"
                                >
                                    <img src="/img/brands/01.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_4"
                                    data-parent="5"
                                    type="button"
                                >
                                    <img src="/img/brands/05.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_5"
                                    data-parent="6"
                                    type="button"
                                >
                                    <img src="/img/brands/06.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_6"
                                    data-parent="7"
                                    type="button"
                                >
                                    <img src="/img/brands/07.jpg" alt="Image" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-contact" hidden="hidden" data-submenu="5">
                    <div class="logo-contact__block">
                        <div class="contacts-content">
                            <div class="contacts-content__header">
                                <div class="contacts-content__title">
                                    Контакты
                                </div>
                                <div class="contacts-content__label">
                                    АО «РАВЕНСТВО»
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/map.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        Россия, 198099, Санкт-Петербург,
                                        <br />ул. Промышленная, д. 19
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/phone.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Телефон:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 252-93-10</p>
                                        <p>+7 812 252-93-33</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/envelope.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Электронный адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        rawenstvo@rawenstvo.ru
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/browser.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Корпоративный сайт:
                                    </div>
                                    <div class="info-contact__value">
                                        https://www.rawenstvo.ru/
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button
                                    class="contacts-logo-item contacts-logo-item_main"
                                    data-parent="5"
                                    type="button"
                                >
                                    <img src="/img/brands/05.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_01"
                                    data-parent="2"
                                    type="button"
                                >
                                    <img src="/img/brands/02.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_02"
                                    data-parent="3"
                                    type="button"
                                >
                                    <img src="/img/brands/03.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_3"
                                    data-parent="4"
                                    type="button"
                                >
                                    <img src="/img/brands/04.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_4"
                                    data-parent="1"
                                    type="button"
                                >
                                    <img src="/img/brands/01.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_5"
                                    data-parent="6"
                                    type="button"
                                >
                                    <img src="/img/brands/06.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_6"
                                    data-parent="7"
                                    type="button"
                                >
                                    <img src="/img/brands/07.jpg" alt="Image" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-contact" hidden="hidden" data-submenu="6">
                    <div class="logo-contact__block">
                        <div class="contacts-content">
                            <div class="contacts-content__header">
                                <div class="contacts-content__title">
                                    Контакты
                                </div>
                                <div class="contacts-content__label">
                                    АО «Петровский электромеханический завод
                                    «МОЛОТ»
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/map.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        Россия, 412541, Саратовская область,
                                        <br />
                                        г. Петровск, ул. Гоголя, д. 40
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/phone.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Телефон:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 84555 31-501</p>
                                        <p>+7 84555 31-502</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/envelope.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Электронный адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        ao@pemzmolot.ru
                                    </div>
                                </div>
                                <!--                                <div class="info-contact">-->
                                <!--                                    <div class="info-contact__label">-->
                                <!--                                        <img src="/img/icons/social/browser.svg" width="32" alt="Image"-->
                                <!--                                             class="info-contact__icon">-->
                                <!--                                        Корпоративный сайт:-->
                                <!--                                    </div>-->
                                <!--                                    <div class="info-contact__value">-->
                                <!--                                        https://www.granit-electron.ru/-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button
                                    class="contacts-logo-item contacts-logo-item_main"
                                    data-parent="6"
                                    type="button"
                                >
                                    <img src="/img/brands/06.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_01"
                                    data-parent="2"
                                    type="button"
                                >
                                    <img src="/img/brands/02.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_02"
                                    data-parent="3"
                                    type="button"
                                >
                                    <img src="/img/brands/03.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_3"
                                    data-parent="4"
                                    type="button"
                                >
                                    <img src="/img/brands/04.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_4"
                                    data-parent="5"
                                    type="button"
                                >
                                    <img src="/img/brands/05.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_5"
                                    data-parent="1"
                                    type="button"
                                >
                                    <img src="/img/brands/01.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_6"
                                    data-parent="7"
                                    type="button"
                                >
                                    <img src="/img/brands/07.jpg" alt="Image" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="logo-contact" hidden="hidden" data-submenu="7">
                    <div class="logo-contact__block">
                        <div class="contacts-content">
                            <div class="contacts-content__header">
                                <div class="contacts-content__title">
                                    Контакты
                                </div>
                                <div class="contacts-content__label">
                                    АО «СЕВЕРНЫЙ ПРЕСС»
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/map.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        Россия, 195196, Санкт-Петербург,
                                        <br />ул. Таллинская, д.7
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/phone.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Телефон:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 445-21-36</p>
                                        <p>+7 812 444-23-58</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/envelope.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Электронный адрес:
                                    </div>
                                    <div class="info-contact__value">
                                        post@nordpress.spb.su
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img
                                            src="/img/icons/social/browser.svg"
                                            width="32"
                                            alt="Image"
                                            class="info-contact__icon"
                                        />
                                        Корпоративный сайт:
                                    </div>
                                    <div class="info-contact__value">
                                        www.nordpress.spb.su
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button
                                    class="contacts-logo-item contacts-logo-item_main"
                                    data-parent="7"
                                    type="button"
                                >
                                    <img src="/img/brands/07.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_01"
                                    data-parent="2"
                                    type="button"
                                >
                                    <img src="/img/brands/02.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_02"
                                    data-parent="3"
                                    type="button"
                                >
                                    <img src="/img/brands/03.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_3"
                                    data-parent="4"
                                    type="button"
                                >
                                    <img src="/img/brands/04.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_4"
                                    data-parent="5"
                                    type="button"
                                >
                                    <img src="/img/brands/05.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_5"
                                    data-parent="6"
                                    type="button"
                                >
                                    <img src="/img/brands/06.jpg" alt="Image" />
                                </button>
                                <button
                                    class="contacts-logo-item contacts-logo-item_6"
                                    data-parent="1"
                                    type="button"
                                >
                                    <img src="/img/brands/01.jpg" alt="Image" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
