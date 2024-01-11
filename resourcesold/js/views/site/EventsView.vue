<template>
    <!-- <header-component /> -->
    <div id="home-6">




        <section class="d-page-banner">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="margin-banner">Nos évènements</h1>
                     
                    </div>
                </div>
            </div>
        </section>



        <section class="feature-area-s3 feature-area-s1">
            <div class="container">
                
                <div class="row">
                 
                    <template v-for="evenement in evenements.data" :key="evenement.id">
                        <div class="col-xl-4 col-md-6 floating" v-if="evenement.last" >
                            <div class="feature-s7 active test wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="5s" >
                            <img style="height: 230px; width: 100%;" :src="evenement.image_url" alt="" />

                            <div class="content text-center">
                                <h4><a href="#">{{ evenement.titre }}</a></h4>
                                <p>{{  evenement.description }}</p>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-4 col-md-6" v-else >
                            <div class="feature-s7 test wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s"
                            data-wow-delay="1s">
                            <img style="height: 230px; width: 100%;" :src="evenement.image_url" alt="" />

                            <div class="content text-center">
                                <h4><a href="#">{{ evenement.titre }}</a></h4>
                                <p>{{  evenement.description }}</p>
                            </div>
                        </div>
                        </div>

                    </template>
                        
                        
                    <p class="text-center" style="margin-top: -10px;">
                        <span class="s-sub-title" v-if="showEmpty==true">Aucun livre disponible, </span>
                    </p>
                </div>
                
        <Bootstrap4Pagination :data="evenements" @pagination-change-page="getPbaEvents" :show-disabled=true
                                :align="right" />
            </div>
            
        </section>



    </div>
</template>

<style scoped>
@import './../../../asset/next/static/css/style.css';
</style>
<script>
import { onMounted } from 'vue'
import useBooks from '../../services/books'
import { Bootstrap4Pagination } from 'laravel-vue-pagination';

export default {
    name: 'HomeView',
    components: {
        Bootstrap4Pagination,
    },
    setup() {
        const {
            getPbaEvents, evenements, success, showEmpty
        } = useBooks()

        onMounted(async () => {
            await getPbaEvents(1)
        })


        return {
            evenements,
            getPbaEvents,
            success,
            showEmpty,

        }
    },

    
}
</script>