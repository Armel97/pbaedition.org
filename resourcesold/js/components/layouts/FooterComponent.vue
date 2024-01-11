
<template>
    <footer class="footer-s5 footer-s1">
        <div class="container">
            <div class="row">
                <div class="col-12" id="subscribe-now">
                    <div class="footer-cta">
                        <div class="p-left"><span>PBA Éditions</span>
                            <h2>Rejoindre notre communauté</h2>
                        </div>
                        <div class="p-right">
                            <form @submit.prevent="Subscribe">

                                <div class="f-subs-form" v-if="success">
                                    <p class="btn btn-success mt-3" style="border-radius: 10px;">Abonnement effectué avec
                                        succès!</p>
                                </div>
                                <div class="f-subs-form" v-else><input type="text" v-model="subscribeForm.email"
                                        placeholder="Veuillez saisir votre adresse e-mail" />
                                    <button type="submit" v-if="!loader">S'abonner</button>
                                    <button type="button" v-else>Patientez ...</button>

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
                        <p class="desc">Presses Bibliques Africaines, un livre, une expérience.</p>
                        <ul class="social-icons-s1">
                            <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="f-widget widget-2">
                        <h3 class="f-title">Domaines d'Intervention</h3>
                        <ul class="f-menu">
                            <li><router-link to="/about/what-we-do/editions">Édition</router-link></li>
                            <li><router-link to="/about/what-we-do/publication">Publication</router-link></li>
                            <li><router-link to="/about/what-we-do/diffusion">Diffusion</router-link></li>
                            <li><router-link to="/about/what-we-do/formation">Traduction</router-link></li>
                            <li><router-link to="/about/what-we-do/traduction">Formation</router-link></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6">
                    <div class="f-widget widget-3">
                        <h3 class="f-title">Livres à paraître</h3>
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
                        <h3 class="f-title">Contact Us</h3>
                        <ul class="info-list">
                            <li><a href="tel:0022942225090"><i class="fa-solid fa-phone"></i>+(229) 42-22-50-90</a></li>
                            <li><a href="mailto:info@pbaeditions.org"><i
                                        class="fa-solid fa-location-dot"></i>info@pbaeditions.org</a></li>
                            <li><a href="#"><i class="fa-solid fa-envelope"></i>Calavi Zopah, Rue de Supermarché du Pont</a>
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
                        <p>2023 © Éditions PBA | Tous droits réservés | Réalisé par TECH For All.</p>
                    </div>
                    <div class="p-right">
                        <ul class="cr-menu">
                            <li><a href="#">Privacy Policy</a></li>
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