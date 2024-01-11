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

                        <h3 class="title-2">La Diffusion</h3>
                        <p class="desc">
                            Pour assurer une bonne exploitation des livres qu’elle publie, la maison d’édition PBA s’appuie sur un vaste réseau de distribution continental. Nos livres sont diffusés dans toute la francophonie par l’intermédiaire de nos représentants, revendeurs, mouvements nationaux des GBU, librairies, etc… Voici l’adresse de nos distributeurs :
                            </p>
                          

                       
                    </main>

                </div>
                <div class="row">
                    <div class="col-md-3" v-for="distributeur in distributeurs" :key="distributeur.id">
                                <p>
                                    <strong>{{ distributeur.country}} :</strong> {{ distributeur.phone }}
                                </p>
                            </div>
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
                                <img style="height: 60px;" src="./../../../../../asset/assets/images/icons/publish.png" alt="" />
                            </div>
                            <div class="content text-center">
                                <h4><a href="#">Publication</a></h4>
                                <p>Publier des livres est la mission des PBA. Suivant un contrat...</p>
                                <p><router-link to="/about/what-we-do/publication" class="text-danger">Lire
                                        plus</router-link></p>

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
import { onMounted } from 'vue';
import HeaderComponent from '../../../../components/layouts/HeaderComponent.vue'
import useBooks from '../../../../services/books';
export default {
    name: 'HomeView',
    components: {
        HeaderComponent,
    },
    setup() {
        const {
            getDistributeurs, distributeurs
        } = useBooks()
        onMounted(async () => {
            getDistributeurs(1)

        })

        return {
            distributeurs,
        };

      },
}
</script>