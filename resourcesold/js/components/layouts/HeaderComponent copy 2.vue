
<template>

    <div style="position: absolute; margin-bottom: 20px;" class="container-fluid" v-if="whatsapp">
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-2">
                <div class="contact-info">
                    <div class="c-info-box-wrap"><a  style="background-color: #008752;" class="c-info-box"  href="tel:+22961422444">
                            <div class="icon"><img style="height: 20px;"
                                    src="./../../../asset/assets/images/feature-icons/phone.png" alt="" />
                            </div>
                            <span>Appel</span>
                        </a></div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="contact-info">
                    <div class="c-info-box-wrap"><a  style="background-color: #008752;" class="c-info-box" href="tel:+22961422444">
                            <div class="icon"><img style="height: 20px;"
                                    src="./../../../asset/assets/images/feature-icons/phone.png" alt="" />
                            </div>
                            <span>Whatsapp</span>
                        </a></div>
                </div>
            </div>

        </div>
    </div>

    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper ">
        <div class="offcanvas__logo" style="margin-top: -35px;">
            <a href="/"><img style="height: 100px; margin: 0 auto;" src="./../../../asset/assets/site-images/logo.jpg" alt=""></a>
        </div>
        <div id="mobile-menu-wrap">
            <!-- <div class="slicknav_menu"><a href="#" aria-haspopup="true" role="button" tabindex="0"
                    class="slicknav_btn slicknav_open" style="outline: none;"><span
                        class="slicknav_menutxt">MENU</span><span class="slicknav_icon"><span
                            class="slicknav_icon-bar"></span><span class="slicknav_icon-bar"></span><span
                            class="slicknav_icon-bar"></span></span></a>
                <nav class="slicknav_nav " aria-hidden="false" role="menu" style="display: nojne;">
                    <ul>
                        <li class=""><router-link to="/">Accueil </router-link> </li>

                        <li class="  "><a href="#">A Propos </a>
                            <ul class="dropdown ">
                                <li><router-link to="/about/vision">Notre Vision</router-link></li>
                                <li><router-link to="/about">Notre histoire</router-link></li>
                                <li><router-link to="/about/what-we-do">Ce que nous faisons</router-link></li>
                                <li><router-link to="/about/team">Notre équipe</router-link></li>
                                <li><router-link to="/partners">Nos Partenaires</router-link></li>
                            </ul>
                        </li>
                        <li class="  "><router-link to="#">Nos Offres</router-link>
                            <ul class="dropdown ">
                                <li><router-link to="/books">Livres</router-link></li>
                                <li><router-link to="/trainings">Formations</router-link></li>
                            </ul>
                        </li>
                        <li class="  "><router-link to="/events">Nos Evènements</router-link></li>

                        <li class=" "><router-link to="/contact">Contact</router-link></li>

                    </ul>
                </nav>
            </div> -->
        </div>
        <!--<div class="header__option__num">+229 61-21-81-99</div>-->
        <a class="header__option__num" href="tel:0022942225090"> +229 42-22-50-90 </a>
    </div>

    <!-- <div class="container"> -->
    
    <header class="header header_shop margin-menu  bg-success" >
        <div class="container fixed" style="z-index: 3;">
            <span >

            <div class="row" style="background-color: #008752;">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="/"><img style="height: 65px;" src="./../../../asset/assets/site-images/logo.jpg"
                                alt=""></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__options__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class=""><a href="/">Accueil </a> </li>
                                <!-- blue #0055a5     green #008752 red #893003 -->

                                <li class=""><a href="JavaScript:Void(0)">A Propos </a>
                                    <ul class="dropdown ">
                                        <li><router-link to="/about/vision">Notre vision</router-link></li>
                                        <li><router-link to="/about">Notre histoire</router-link></li>
                                        <li><router-link to="/about/what-we-do">Ce que nous faisons</router-link></li>
                                        <li><router-link to="/about/team">Notre équipe</router-link></li>
                                        <li><router-link to="/partners">Nos partenaires</router-link></li>
                                        <li><router-link to="/gallery">Notre galerie</router-link></li>
                                        <li><router-link to="/videos">Nos vidéos</router-link></li>
                                        <!-- <li><router-link to="/gallery">Notre gallerie</router-link></li> -->
                                    </ul>
                                </li>
                                <li class=""><a href="#">Livres </a>
                                    <ul class="dropdown ">
                                        <li><router-link to="/a-paraitre">A paraître</router-link></li>
                                        <li><router-link to="/nouveautes">Nouveautés</router-link></li>
                                        <li><router-link to="/livres">Livres</router-link></li>
                                        <li><router-link to="/livres-hippo">LivresHippo</router-link></li>
                                    </ul>
                                </li>
                                
                                <li class="  "><router-link to="#">Nos annonces</router-link>
                                    <ul class="dropdown ">
                                        <li>
                                            <router-link to="/evenements">Evènements</router-link>
                                        </li>
                                        <li><router-link to="/formations">Formations</router-link></li>
                                        <li><router-link to="/stages">Stages</router-link></li>
                                        <li><router-link to="/prix-excellence">Prix d'excellence</router-link></li>
                                    </ul>
                                </li>
                               

                                <li class=" "><router-link to="/contact">Contact</router-link></li>
                                <li v-if="whatsapp" style="color: #008752;" class="active"> ok</li>
                                <li v-if="whatsapp" style="color: #008752;" class="active"> superok</li>
                                <li v-if="whatsapp" class="active"> Appel</li>


                            </ul>
                        </nav>
                        <!--<div class="header__option__num">+229 61-21-81-99</div>-->
                        <a class="header__option__num" style="color: white;" href="tel:0022942225090"> +229 42-22-50-90</a>
                        <!-- <a class="header__option__num" style="color: white;" href="#" v-if="!whatsapp" @click="call()"> +229 61-42-24-44</a> -->
                       

                    </div>




                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </span>

        </div>
    </header>
    <!-- </div> -->

</template>

<style scoped></style>
<script scoped>
import { ref } from 'vue';
import { onMounted } from 'vue';

export default {
    setup() {
        onMounted(() => {
            //Canvas Menu
            $(".canvas__open").on('click', function () {
                $(".offcanvas-menu-wrapper").addClass("active");
                $(".offcanvas-menu-overlay").addClass("active");
            });

            $(".offcanvas-menu-overlay").on('click', function () {
                $(".offcanvas-menu-wrapper").removeClass("active");
                $(".offcanvas-menu-overlay").removeClass("active");
            });
            /*------------------
                   Navigation
               --------------------*/
            $(".mobile-menu").slicknav({
                prependTo: '#mobile-menu-wrap',
                allowParentLinks: true
            });




        })
        const isActive = ref(true)
        const toggle = () => {
            // isActive.value = true
            console.log(isActive.value)
        }
        const whatsapp = ref(false)
        const call = () => {
            whatsapp.value = true
        }
        return {
            toggle,
            isActive,
            call,
            whatsapp
        }

    }
}



</script>