<script setup>
    import AppLayout from "../Layouts/AppLayout.vue";
  	import { Link, usePage } from "@inertiajs/vue3";

	const page = usePage()
</script>

<template>
    <AppLayout>
        <div class="product" style="background-image: url(img/catalog-bg.png);">
            <div class="contacts-wrapper">
                <div class="logo-contact _submenu-open" hidden="hidden" data-submenu="1">
                    <div class="logo-contact__block">
                        <div class="contacts-content">
                            <div class="contacts-content__header">
                                <div class="contacts-content__title">
                                    {{ __('pages.contacts.h1') }}
                                </div>
                                <div class="contacts-content__label">
                                    {{ __('pages.contacts.org.1.title1') }}<br>{{ __('pages.contacts.org.1.title2') }}
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/map.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.address') }}:
                                    </div>
                                    <div class="info-contact__value" v-html="__('pages.contacts.org.1.address1')">
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/phone.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.phone') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 271-45-85</p>
                                        <p>+7 812 274 63 39</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/envelope.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.email') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        office@granit-electron.ru
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/browser.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.site') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        https://www.granit-electron.ru/
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button class="contacts-logo-item contacts-logo-item_main" data-parent="1"
                                    type="button">
                                    <img v-if="page.props.locale === 'ru'" src="img/logo_ru.svg" alt="Image" /> 
									<img v-if="page.props.locale === 'en'" src="img/logo_en.svg" alt="Image" />
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_01" data-parent="2" type="button">
                                    <img src="img/brands/02.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.1.logo1')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_02" data-parent="3" type="button">
                                    <img src="img/brands/03.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.1.logo2')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_3" data-parent="4" type="button">
                                    <img src="img/brands/04.svg" alt="Image">
                                    <span v-html="__('pages.contacts.org.1.logo3')"></span>
                                </button>
                                <!--                                <button class="contacts-logo-item contacts-logo-item_4" data-parent="5" type="button">-->
                                <!--                                    <img src="img/brands/05.jpg" alt="Image">-->
                                <!--                                </button>-->
                                <button class="contacts-logo-item contacts-logo-item_5" data-parent="6" type="button">
                                    <img src="img/brands/06.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.1.logo4')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_6" data-parent="7" type="button">
                                    <img src="img/brands/07.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.1.logo5')"></span>
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
                                    {{ __('pages.contacts.h1') }}
                                </div>
                                <div class="contacts-content__label" v-html="__('pages.contacts.org.2.title1')"></div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/map.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.address') }}:
                                    </div>
                                    <div class="info-contact__value" v-html="__('pages.contacts.org.2.address1')"></div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/phone.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.phone') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 233-29-02</p>
                                        <p>+7 812 232-89-26</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/envelope.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.email') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        office@zavodkulakova.ru
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/browser.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.site') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        https://www.zavodkulakova.ru
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button class="contacts-logo-item contacts-logo-item_main" data-parent="2"
                                    type="button">
                                    <img src="img/brands/02.jpg" alt="Image">
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_01" data-parent="1"
                                    type="button">
                                    <img v-if="page.props.locale === 'ru'" src="img/logo_ru.svg" alt="Image" /> 
									<img v-if="page.props.locale === 'en'" src="img/logo_en.svg" alt="Image" />
                                    <span v-html="__('pages.contacts.org.2.logo1')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_02" data-parent="3"
                                    type="button">
                                    <img src="img/brands/03.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.2.logo2')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_3" data-parent="4"
                                    type="button">
                                    <img src="img/brands/04.svg" alt="Image">
                                    <span v-html="__('pages.contacts.org.2.logo3')"></span>
                                </button>
                                <!--                                <button class="contacts-logo-item contacts-logo-item_4" data-parent="5" type="button">-->
                                <!--                                    <img src="img/brands/05.jpg" alt="Image">-->
                                <!--                                </button>-->
                                <button class="contacts-logo-item contacts-logo-item_5" data-parent="6"
                                    type="button">
                                    <img src="img/brands/06.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.2.logo4')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_6" data-parent="7"
                                    type="button">
                                    <img src="img/brands/07.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.2.logo5')"></span>
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
                                    {{ __('pages.contacts.h1') }}
                                </div>
                                <div class="contacts-content__label" v-html="__('pages.contacts.org.3.title1')">
                                    
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/map.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.address') }}:
                                    </div>
                                    <div class="info-contact__value" v-html="__('pages.contacts.org.3.address1')">
                                        
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/phone.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.phone') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 8452 79-95-05</p>
                                        <p>+7 8452 79-71-80</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/envelope.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.email') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        srz@granit-srz.ru
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/browser.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.site') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        https://www.granit-srz.ru/
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button class="contacts-logo-item contacts-logo-item_main" data-parent="3"
                                    type="button">
                                    <img src="img/brands/03.jpg" alt="Image">
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_01" data-parent="2"
                                    type="button">
                                    <img src="img/brands/02.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.3.logo1')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_02" data-parent="1"
                                    type="button">
                                    <img v-if="page.props.locale === 'ru'" src="img/logo_ru.svg" alt="Image" /> 
									<img v-if="page.props.locale === 'en'" src="img/logo_en.svg" alt="Image" />
                                    <span v-html="__('pages.contacts.org.3.logo2')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_3" data-parent="4"
                                    type="button">
                                    <img src="img/brands/04.svg" alt="Image">
                                    <span v-html="__('pages.contacts.org.3.logo3')"></span>
                                </button>
                                <!--                                <button class="contacts-logo-item contacts-logo-item_4" data-parent="5" type="button">-->
                                <!--                                    <img src="img/brands/05.jpg" alt="Image">-->
                                <!--                                </button>-->
                                <button class="contacts-logo-item contacts-logo-item_5" data-parent="6"
                                    type="button">
                                    <img src="img/brands/06.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.3.logo4')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_6" data-parent="7"
                                    type="button">
                                    <img src="img/brands/07.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.3.logo5')"></span>
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
                                    {{ __('pages.contacts.h1') }}
                                </div>
                                <div class="contacts-content__label" v-html="__('pages.contacts.org.4.title1')">
                                    
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/map.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.address') }}:
                                    </div>
                                    <div class="info-contact__value" v-html="__('pages.contacts.org.4.address1')">
                                        
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/phone.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.phone') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 252-92-00</p>
                                        <p>+7 812 252-92-26</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/envelope.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.email') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        rawenstvo@rawenstvo.ru
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/browser.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.site') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        https://www.rawenstvo.ru/
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button class="contacts-logo-item contacts-logo-item_main" data-parent="4"
                                    type="button">
                                    <img src="img/brands/04.svg" alt="Image">
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_01" data-parent="2"
                                    type="button">
                                    <img src="img/brands/02.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.4.logo1')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_02" data-parent="3"
                                    type="button">
                                    <img src="img/brands/03.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.4.logo2')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_3" data-parent="1"
                                    type="button">
                                    <img v-if="page.props.locale === 'ru'" src="img/logo_ru.svg" alt="Image" /> 
									<img v-if="page.props.locale === 'en'" src="img/logo_en.svg" alt="Image" />
                                    <span v-html="__('pages.contacts.org.4.logo3')"></span>
                                </button>
                                <!--                                <button class="contacts-logo-item contacts-logo-item_4" data-parent="5" type="button">-->
                                <!--                                    <img src="img/brands/05.jpg" alt="Image">-->
                                <!--                                </button>-->
                                <button class="contacts-logo-item contacts-logo-item_5" data-parent="6"
                                    type="button">
                                    <img src="img/brands/06.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.4.logo4')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_6" data-parent="7"
                                    type="button">
                                    <img src="img/brands/07.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.4.logo5')"></span>
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
                                    {{ __('pages.contacts.h1') }}
                                </div>
                                <div class="contacts-content__label" v-html="__('pages.contacts.org.5.title1')">
                                    
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/map.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.address') }}:
                                    </div>
                                    <div class="info-contact__value" v-html="__('pages.contacts.org.5.address1')">
                                        
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/phone.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.phone') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 84555 31-501</p>
                                        <p>+7 84555 31-502</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/envelope.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.email') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        ao@pemzmolot.ru
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button class="contacts-logo-item contacts-logo-item_main" data-parent="6"
                                    type="button">
                                    <img src="img/brands/06.jpg" alt="Image">
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_01" data-parent="2"
                                    type="button">
                                    <img src="img/brands/02.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.5.logo1')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_02" data-parent="3"
                                    type="button">
                                    <img src="img/brands/03.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.5.logo2')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_3" data-parent="4"
                                    type="button">
                                    <img src="img/brands/04.svg" alt="Image">
                                    <span v-html="__('pages.contacts.org.5.logo3')"></span>
                                </button>
                                <!--                                <button class="contacts-logo-item contacts-logo-item_4" data-parent="5" type="button">-->
                                <!--                                    <img src="img/brands/05.jpg" alt="Image">-->
                                <!--                                </button>-->
                                <button class="contacts-logo-item contacts-logo-item_5" data-parent="1"
                                    type="button">
                                    <img v-if="page.props.locale === 'ru'" src="img/logo_ru.svg" alt="Image" /> 
									<img v-if="page.props.locale === 'en'" src="img/logo_en.svg" alt="Image" />
                                    <span v-html="__('pages.contacts.org.5.logo4')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_6" data-parent="7"
                                    type="button">
                                    <img src="img/brands/07.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.5.logo5')"></span>
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
                                    {{ __('pages.contacts.h1') }}
                                </div>
                                <div class="contacts-content__label" v-html="__('pages.contacts.org.6.title1')">
                                    
                                </div>
                            </div>
                            <div class="contacts-content__info">
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/map.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.address') }}:
                                    </div>
                                    <div class="info-contact__value" v-html="__('pages.contacts.org.6.address1')">
                                        
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/phone.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.phone') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        <p>+7 812 445-21-36</p>
                                        <p>+7 812 444-23-58</p>
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/envelope.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.email') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        post@nordpress.spb.su
                                    </div>
                                </div>
                                <div class="info-contact">
                                    <div class="info-contact__label">
                                        <img src="img/icons/social/browser.svg" width="32" alt="Image"
                                            class="info-contact__icon">
                                        {{ __('pages.contacts.site') }}:
                                    </div>
                                    <div class="info-contact__value">
                                        www.nordpress.spb.su
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contacts-wrapper__logo">
                            <div class="contacts-logo">
                                <button class="contacts-logo-item contacts-logo-item_main" data-parent="7"
                                    type="button">
                                    <img src="img/brands/07.jpg" alt="Image">
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_01" data-parent="2"
                                    type="button">
                                    <img src="img/brands/02.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.6.logo1')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_02" data-parent="3"
                                    type="button">
                                    <img src="img/brands/03.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.6.logo2')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_3" data-parent="4"
                                    type="button">
                                    <img src="img/brands/04.svg" alt="Image">
                                    <span v-html="__('pages.contacts.org.6.logo3')"></span>
                                </button>
                                <!--                                <button class="contacts-logo-item contacts-logo-item_4" data-parent="5" type="button">-->
                                <!--                                    <img src="img/brands/05.jpg" alt="Image">-->
                                <!--                                </button>-->
                                <button class="contacts-logo-item contacts-logo-item_5" data-parent="6"
                                    type="button">
                                    <img src="img/brands/06.jpg" alt="Image">
                                    <span v-html="__('pages.contacts.org.6.logo4')"></span>
                                </button>
                                <button class="contacts-logo-item contacts-logo-item_6" data-parent="1"
                                    type="button">
                                    <img v-if="page.props.locale === 'ru'" src="img/logo_ru.svg" alt="Image" /> 
									<img v-if="page.props.locale === 'en'" src="img/logo_en.svg" alt="Image" />
                                    <span v-html="__('pages.contacts.org.6.logo5')"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
