<template>
    <div id="home-6">
        <section class="d-page-banner">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="margin-banner">Nos formations</h1>
                     
                    </div>
                </div>
            </div>
        </section>

        <section class="home5-feature-area-s5 feature-area-s1 s-padding" style="margin-top: -20px;">
            <div class="container">
                <div class="s-title-wrap text-center">
                    <h3 class="title-2 mt-4">Nos futures formations</h3>
                    <p v-if="not_empty_futur"> Aucune formation disponible </p>

                </div>
                <div class="row">
                    <template v-for="formation in trainings.data"
                            :key="formation.id">
                        
                        <div class="col-lg-4 col-md-6" style="margin-bottom: 20px;" v-if="formation.futur">
                            <div class="b-post-s1">
                                <div class="thumb">
                                    <img  :src="formation.image_url" alt="" />
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li>
                                            <span class="icon"><i class="fa-regular fa-user"></i></span>
                                            <span class="text">{{ formation.auteur }}</span>
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="#">{{ formation.titre }}</a>
                                    </h4>
                                    <!-- <div class="btm">
                                        <a class="readmore" href="#">Participer </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                    </template>

                  

                    <p class="text-center" style="margin-top: -10px;">
                        <span class="s-sub-title " v-if="showEmpty == true">Aucune formation disponible </span>
                    </p>
                </div>
                <Bootstrap4Pagination :data="trainings" @pagination-change-page="getPbaTrainings" :show-disabled=true
                    :align="right" />
                <div class="row">
                    <h3 class="title-2 my-4 text-center">Formations en cours </h3>
                    <p v-if="not_empty_current" class="text-center"> Aucune formation disponible </p>

                    <template v-for="formation in trainings.data"
                            :key="formation.id">
                        
                        <div class="col-lg-4 col-md-6" style="margin-bottom: 20px;" v-if="formation.current">
                            <div class="b-post-s1">
                                <div class="thumb">
                                    <img  :src="formation.image_url" alt="" />
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li>
                                            <span class="icon"><i class="fa-regular fa-user"></i></span>
                                            <span class="text">{{ formation.auteur }}</span>
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="#">{{ formation.titre }}</a>
                                    </h4>
                                    <!-- <div class="btm">
                                        <a class="readmore" href="#">Participer </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                    </template>


                    <p class="text-center" style="margin-top: -10px;">
                        <span class="s-sub-title " v-if="showEmpty == true">Aucune formation disponible </span>
                    </p>
                </div>
                <Bootstrap4Pagination :data="trainings" @pagination-change-page="getPbaTrainings" :show-disabled=true
                    :align="right" />
                <div class="row">
                     
                    <h3 class="title-2 my-4 text-center">Formations antérieures </h3>
                    <p v-if="not_empty_passed" class="text-center"> Aucune formation disponible </p>
                    <template v-for="formation in trainings.data"
                            :key="formation.id">
                        
                        <div class="col-lg-4 col-md-6" style="margin-bottom: 20px;" v-if="formation.passed">
                            <div class="b-post-s1">
                                <div class="thumb">
                                    <img  :src="formation.image_url" alt="" />
                                </div>
                                <div class="content">
                                    <ul class="meta">
                                        <li>
                                            <span class="icon"><i class="fa-regular fa-user"></i></span>
                                            <span class="text">{{ formation.auteur }}</span>
                                        </li>
                                    </ul>
                                    <h4>
                                        <a href="#">{{ formation.titre }}</a>
                                    </h4>
                                    <!-- <div class="btm">
                                        <a class="readmore" href="#">Participer </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                    </template>
                    <p class="text-center" style="margin-top: -10px;">
                        <span class="s-sub-title " v-if="showEmpty == true">Aucune formation disponible </span>
                    </p>
                </div>
                <Bootstrap4Pagination :data="trainings" @pagination-change-page="getPbaTrainings" :show-disabled=true
                    :align="right" />

            </div>
        </section>
        <section class="portfolio-detail s-padding" style="margin-top: -150px;">
            <div class="container">
                <div class="row">
                   
                    <!-- <aside class="col-lg-12 portfolio-detail__side">
                        <div class="row">

                            <div class="col-lg-12">
                                <section class="contact-banner-s22">
                                    <div class="container">
                                        <div class="contact-banner-inner">
                                            <div class="contact-banner-s2__content">
                                                <h2 class="content-t">Demander une formation</h2>
                                                <p>Vous avez ma possibilité de faire une demande de formation.
                                                </p>
                                            </div>
                                            <div class="contact-banner-s2__button">
                                                <div>
                                                    <router-link class="btn btn-s2" to="/contact">Cliquez-ici</router-link>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                            </div>
                        </div>


                    </aside> -->
                </div>
            </div>
        </section>


    </div>
</template>

<style scoped>
/* @import '../../../../asset/next/static/css/style.css'; */
</style>
<script>
import { Bootstrap4Pagination } from 'laravel-vue-pagination';
import { onMounted, ref } from 'vue';
import useBooks from '../../../services/books';

export default {
    name: 'HomeView',
    components: {
        Bootstrap4Pagination,
    },
    setup() {
        const {
            getPbaTrainings, trainings, success, showEmpty
        } = useBooks()

        const not_empty_passed = ref(0)
        const not_empty_current = ref(0)
        const not_empty_futur = ref(0)
        onMounted(async () => {
            await getPbaTrainings(1)
            if (!trainings.value.data.not_empty_passed) {
                not_empty_passed.value = 1
            } else {
                not_empty_passed.value = 0

            }
            if (!trainings.value.data.not_empty_current) {
                not_empty_current.value = 1
            } else {
                not_empty_current.value = 0

            }
            if (!trainings.value.data.not_empty_futur) {
                not_empty_futur.value = 1
            } else {
                not_empty_futur.value = 0

            }

            console.log(trainings.value.data.not_empty_current);
        })


        return {
            trainings,
            getPbaTrainings,
            success,
            showEmpty,
            not_empty_passed,
            not_empty_current,
            not_empty_futur,

        }
    },

}
</script>