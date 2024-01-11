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

        <section class="service-details">
            <div class="container">
                <div class="row" style="text-align: justify;">
                    <main class="col-lg-12 service-detail-main sd-padding">

                        <h3 class="title-2">La Publication</h3>
                        <p class="desc">
                            Publier des livres est la mission des PBA. Suivant un contrat d’édition en bonne et due forme avec les différents auteurs, le service de production se charge d’assurer toutes les tâches de production pour passer du manuscrit au livre imprimé. Tout nouveau titre est officiellement lancé lors d’une cérémonie de dédicace et promu sur les réseaux sociaux.
                        </p>
                        <!-- <div class="portfolio-challenges">
                            <ul class="i-list">
                                <li><span class="icon"><i class="fa-solid fa-check"></i></span><span class="text">
                                    Des conférences débats sur la thématique que votre livre aborde</span></li>
                                <li><span class="icon"><i class="fa-solid fa-check"></i>
                                    </span><span class="text">	Des spots radio/télé</span></li>
                                <li><span class="icon"><i class="fa-solid fa-check"></i></span><span class="text">
                                    Des passages dans des émissions radios/télés</span></li>
                                <li><span class="icon"><i class="fa-solid fa-check"></i></span><span class="text">
                                    Des ventes promotionnelles annuelles 
                                    </span></li>
                                <li><span class="icon"><i class="fa-solid fa-check"></i></span><span class="text">
                                    Etc.
                                    </span></li>
                            </ul>
                        </div> -->
                    
                        
                    </main>

                </div>
            </div>
        </section>

        <section class="home6-features-slider">
        <div class="container mt-5">
           
            <div class="row d-flex justify-content-between ">
                <div class="col-lg-3 col-md-6">
                    <div class="feature-s9 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s">
                        <div class="icon d-flex align-center justify-center" style="margin: auto;">
                            <img style="height: 60px;" src="./../../../../../asset/assets/images/icons/research.png" alt="" />
                        </div>
                        <div class="content text-center">
                            <h4><a href="#">Édition </a></h4>
                            <p>C’est le cœur des activités de la maison d’édition. PBA est spécialisée ...</p>
                            <p><router-link to="/about/what-we-do/editions" class="text-danger">Lire plus</router-link>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-s9 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="1s">
                        <div class="icon d-flex align-center justify-center" style="margin: auto;">
                            <img style="height: 60px;" src="./../../../../../asset/assets/images/icons/book.png" alt="" />
                        </div>
                        <div class="content text-center">
                            <h4><a href="#">Diffusion </a></h4>
                            <p>Pour assurer une bonne exploitation des livres ...</p>
                            <p><router-link to="/about/what-we-do/diffusion" class="text-danger">Lire plus</router-link>
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-s9 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="2s">
                        <div class="icon d-flex align-center justify-center" style="margin: auto;">
                            <img style="height: 60px;" src="./../../../../../asset/assets/images/icons/online-learning.png"
                                alt="" />

                        </div>
                        <div class="content text-center">
                            <h4><a href="#">Formation</a></h4>
                            <p>C’est un domaine stratégique des PBA. La maison d’édition ...</p>
                            <p><router-link to="/about/what-we-do/formation" class="text-danger">Lire plus</router-link>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="feature-s9 wow animate__animated animate__fadeInUp" data-wow-duration="1.5s"
                        data-wow-delay="3s">
                        <div class="icon d-flex align-center justify-center" style="margin: auto;">
                            <img style="height: 60px;" src="./../../../../../asset/assets/images/icons/translate.png"
                                alt="" />

                        </div>
                        <div class="content text-center">
                            <h4><a href="#">Traduction</a></h4>
                            <p>Les PBA disposent d’un service de traduction (anglais français, français anglais)...</p>
                            <p><router-link to="/about/what-we-do/traduction" class="text-danger">Lire
                                    plus</router-link></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    </div>
</template>

<style scoped>
@import '../../../../../asset/next/static/css/style.css';
</style>
<script>
import HeaderComponent from '../../../../components/layouts/HeaderComponent.vue'
export default {
    name: 'HomeView',
    components: {
        HeaderComponent,
    }
}
</script>