<template>
    <div id="home-6">
        <section class="d-page-banner">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="margin-banner">Nos offres de stage</h1>
                      
                    </div>
                </div>
            </div>
        </section>


        <section class="single-blog-detail" style="margin-top: -110px;">
            <div class="container">
                <div class="row">
                    <main class="col-lg-12">
                        
                        <div class="comments-section">
                            <p v-if="showEmpty"> Il n'y a pas d'offre de stage disponible actuellement </p>
                            <div class="all-comments" style="margin-top: -20px;">
                                <div class="s-comment" v-for="stage in stages.data" :key="stage.id">
                                    <div class="s-comment-inner">
                                        <div class="content">
                                            <h4 class="name"> {{ stage.titre }} </h4>
                                            <p class="c-massege">{{ stage.description }}
                                            </p>
                                            <span class="c-date"> {{ stage.date }}</span>
                                            <span class="c-date"> Publié le {{ stage.created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                             
                            </div>
                        </div>
                      
                    </main>
                 
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
import { onMounted } from 'vue';
import useHome from '../../../services/home';

export default {
    name: 'HomeView',
    components: {
        Bootstrap4Pagination,
    },
    setup() {
        const {
            getStages, stages, showEmpty
        } = useHome()

        onMounted(async () => {
            await getStages(1)
        })


        return {
            stages,
            getStages,
            showEmpty,

        }
    },

}
</script>