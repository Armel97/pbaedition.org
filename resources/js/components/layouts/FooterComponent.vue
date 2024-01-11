
<template>
    <footer class="footer-s5 footer-s1">
        <div class="container">
            <div class="row">
                <div class="col-12" id="subscribe-now">
                    <div class="footer-cta">
                        <div class="p-left"><span>  {{ $t('PBA Editions') }}  </span>
                            <h2>  {{ $t('Join our community') }}   </h2>
                        </div>
                        <div class="p-right">
                            <form @submit.prevent="Subscribe">

                                <div class="f-subs-form" v-if="success">
                                    <p class="btn btn-success mt-3" style="border-radius: 10px;">  {{ $t('Subscription completed successfully') }} </p>
                                </div>
                                <div class="f-subs-form" v-else>
                                    <input type="text" v-model="subscribeForm.email"
                                        :placeholder="$t('Please enter your email address')" />

                                    <button type="submit" v-if="!loader">  {{ $t('Subscribe') }}   </button>
                                    <button type="button" v-else>  {{ $t('Please wait') }} ...</button>

                                </div>
                                <span v-if="errors.email" class="text-danger" v-text="errors.email[0]"></span>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row f-main">
                <div class="col-xl-3 col-lg-6">
                    <div class="f-widget widget-1">
                        <div class="logo ">
                            <img style="height: 120px; margin: auto;" src="./../../../asset/assets/site-images/logo-bl.png" alt="" />
                        </div>
                        <p class="desc">  {{ $t('Presses Bibliques Africaines, one book, one experience') }}</p>
                        <ul class="social-icons-s1">
                            <li><a href="https://www.facebook.com/pbaeditions?mibextid=ZbWKwL"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/pbaeditions?igsh=MWVjdDF2NW5wN282bg=="><i class="fa-brands fa-instagram"></i></a></li>
                            <!-- <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="f-widget widget-2">
                        <h3 class="f-title">  {{ $t('Fields of intervention') }}   </h3>
                        <ul class="f-menu">
                            <li><router-link to="/about/what-we-do/editions">  {{ $t('Edition') }}   </router-link></li>
                            <li><router-link to="/about/what-we-do/publication">  {{ $t('Publication') }} </router-link></li>
                            <li><router-link to="/about/what-we-do/diffusion">  {{ $t('Broadcasting') }}  </router-link></li>
                            <li><router-link to="/about/what-we-do/traduction">  {{ $t('Translation') }} </router-link></li>
                            <li><router-link to="/about/what-we-do/formation">  {{ $t('Training') }}</router-link></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="f-widget widget-3">
                        <h3 class="f-title"> {{ $t('Books to be published') }} </h3>
                        <div class="recent-posts">
                            <div class="rp-single" v-for="livre in livresFooter" :key="livre.id">
                                <div class="thumb"><img :src="livre.image_url" alt="" />
                                </div>
                                <div class="content"> 
                                    <h4><router-link to="a-paraitre">{{ livre.title }} </router-link></h4>
                                    <!-- <span><i class="fa-solid fa-calendar-days"></i>23 Mai 2023</span> -->
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="widget-4">
                        <h3 class="f-title"> {{ $t('Contact us') }} </h3>
                        <ul class="info-list">
                            <li><a href="tel:0022942225090"><i class="fa-solid fa-phone"></i>+(229) 42-22-50-90</a></li>
                            <li><a href="mailto:info@pbaeditions.org"><i
                                        class="fa-solid fa-location-dot"></i>info@pbaeditions.org</a></li>
                            <li><a href="#"><i class="fa-solid fa-envelope"></i> Calavi Zopah, Rue de Supermarché du Pont</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-cr">
            <div class="container">
                <div class="footer-cr-container">
                    <div class="p-left">
                        <p>  2023 © {{ $t('Editions PBA') }}  | {{ $t('All rights reserved') }} | {{ $t('Created by') }} <a href="https://wa.me/c/22997023967">TECH For All</a>.</p>
                    </div>
                    <div class="p-right">
                        <ul class="cr-menu">
                            <li><a href="#"> {{ $t('Privacy Policy') }} </a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
<script>
import { onMounted, reactive, ref } from 'vue';
import useHome from './../../services/home';

export default {


    setup() {
        const {
            handleSubscribe, loader, success, errors, getBookAParaitreForFooter, livresFooter
        } = useHome()

        onMounted(async () => {
            await getBookAParaitreForFooter()
        })

        const subscribeForm = reactive({
            email: ''
        })
        const Subscribe = async () => {
            loader.value = false
            await handleSubscribe({ ...subscribeForm });
            loader.value = true
            success.value = true

        }



        return {
            Subscribe,
            subscribeForm,
            loader,
            success,
            errors,
            livresFooter,

        }
    },
}
</script>