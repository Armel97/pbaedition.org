<template>
    <!-- <header-component /> -->


    <div id="home-6">

        <section class="d-page-banner">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="margin-banner">Nos domaines d'intervention</h1>
                  
                    </div>
                </div>
            </div>
        </section>
        <section class="home6-features-slider" style="margin-top: 10px;">
            <div class="container">
           
                <div class="">
                    <div class="row d-flex justify-content-between ">
                        <div class="col-lg-6 col-md-6">
                            <div class="feature-s9 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
                                <div class="icon d-flex align-center justify-center" style="margin: auto;">
                                    <img style="height: 60px;" src="./../../../../asset/assets/images/icons/research.png"
                                        alt="" />
                                </div>
                                <div class="content text-center">
                                    <h4><a href="#">Édition </a></h4>
                                    <p>
                                        
                                        C’est le cœur des activités de la maison d’édition. PBA est spécialisée dans l’édition de tout genre littéraire en langue française. Avec une équipe de rédacteurs, de réviseurs, de relecteurs et d’infographes expérimentés, tout service d’édition est assuré à merveille. 

                                    </p>
                                    <p><router-link to="/about/what-we-do/editions" class="text-danger">Lire
                                            plus</router-link>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="feature-s9 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s"
                                data-wow-delay="1s">
                                <div class="icon d-flex align-center justify-center" style="margin: auto;">
                                    <img style="height: 60px;" src="./../../../../asset/assets/images/icons/publish.png"
                                        alt="" />
                                </div>
                                <div class="content text-center">
                                    <h4><a href="#">Publication</a></h4>
                                    <p>
                                        Publier des livres est la mission des PBA. Suivant un contrat d’édition en bonne et due forme avec les différents auteurs, le service de production se charge d’assurer toutes les tâches de production pour passer du manuscrit au livre imprimé.
                                    </p>
                                    <p><router-link to="/about/what-we-do/publication" class="text-danger">Lire
                                            plus</router-link></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="feature-s9 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s"
                                data-wow-delay="1s">
                                <div class="icon d-flex align-center justify-center" style="margin: auto;">
                                    <img style="height: 60px;" src="./../../../../asset/assets/images/icons/book.png"
                                        alt="" />
                                </div>
                                <div class="content text-center">
                                    <h4><a href="#">Diffusion </a></h4>
                                    <p>
                                        Pour assurer une bonne exploitation des livres qu’elle publie, la maison d’édition PBA s’appuie sur un vaste réseau de distribution continental. Nos livres sont diffusés dans toute la francophonie par l’intermédiaire de nos représentants, revendeurs, mouvements nationaux des GBU, librairies, etc… 

                                    </p>
     
                                    <p><router-link to="/about/what-we-do/diffusion" class="text-danger">Lire
                                            plus</router-link>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="feature-s9 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s"
                                data-wow-delay="2s">
                                <div class="icon d-flex align-center justify-center" style="margin: auto;">
                                    <img style="height: 60px;"
                                        src="./../../../../asset/assets/images/icons/online-learning.png" alt="" />

                                </div>
                                <div class="content text-center">
                                    <h4><a href="#">Formation</a></h4>
                                    <p>
                                        
                                        C’est un domaine stratégique des PBA. La maison d’édition investit pour le renforcement des capacités des auteurs et potentiels auteurs pour susciter des manuscrits de qualité. Des formations sont également organisées à l’endroit des professionnels du livre comme les rédacteurs, 
                                                                            </p>
                                    <p><router-link to="/about/what-we-do/formation" class="text-danger">Lire
                                            plus</router-link>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="feature-s9 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s"
                                data-wow-delay="3s">
                                <div class="icon d-flex align-center justify-center" style="margin: auto;">
                                    <img style="height: 60px;" src="./../../../../asset/assets/images/icons/translate.png"
                                        alt="" />

                            </div>
                            <div class="content text-center">
                                <h4><a href="#">Traduction</a></h4>
                                <p>
                                    Les PBA disposent d’un service de traduction (anglais français, français anglais). Ce service est ouvert et disponible pour la traduction de tout texte destiné ou non à la publication. 

                                </p>
                                <p><router-link to="/about/what-we-do/traduction" class="text-danger">Lire
                                        plus</router-link></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     

       
</div></template>

<style scoped>@import '../../../../asset/next/static/css/style.css';</style>
<script>
import HeaderComponent from '../../../components/layouts/HeaderComponent.vue'
export default {
    name: 'HomeView',
    components: {
        HeaderComponent,
    }
}
</script>