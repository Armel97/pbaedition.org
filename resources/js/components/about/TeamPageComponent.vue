<template>
    <div id="home-6">

            <section class="d-page-banner">
                <div class="container">
                    <div class="row">
                        <div class="content">
                            <h1 class="margin-banner">Équipe</h1>
                        </div>
                    </div>
                </div>
            </section>
            <section class="team-area-s2 s-padding" style="margin-top: -40px;">
                <div class="container">
                    <div class="s-title-wrap"><span class="s-sub-title">Notre équipe</span>
                    </div>
                    <div class="row">
                        <p class="text-center" v-if="success === false">
                            <img style="margin: auto; height: 50px;" src="./../../../asset/loader/loading-loading-forever.gif"
                                alt="">
                        </p>
                        
                        <div class="col-lg-3 col-md-6" style="margin-bottom: 70px;" v-for="team in teams.data" :key="team.id">
                            <div class="single-team-s2">
                                <div class="thumb"><img :src="team.image_url" alt="" />
                                    <ul class="social-icons-s1">
                                        <li><a :href="team.facebook"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <!-- <li><a :href="team.linkedin"><i
                                                    class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a :href="team.youtube"><i
                                                    class="fa-brands fa-youtube"></i></a></li> -->
                                    </ul>
                                </div>
                                <div class="content">
                                    <h3 class="name"><a href="#"> {{ team.prenom }} {{ team.nom }}</a></h3>
                                    <p class="designation"> {{ team.titre }}  </p>
                                </div>
                            </div>
                        </div>
                        
                        <p class="text-center" style="margin-top: -10px;">
                            <span class="s-sub-title " v-if="showEmpty==true">Aucune formation disponible </span>
                        </p>
                    </div>
                    <Bootstrap4Pagination :data="teams" @pagination-change-page="getPbaTeam" :show-disabled=true
                    :align="right" />

                </div>
            </section>


</div>

</template>
  
<style scoped>/* @import './../../../asset/next/static/css/style.css'; */</style>
<script scoped>
import { Bootstrap4Pagination } from 'laravel-vue-pagination';
import { onMounted } from 'vue';
import useBooks from '../../services/books';


export default {
    components: {
        Bootstrap4Pagination,
    },
    setup() {
        const {
            getPbaTeam, teams, success, showEmpty
        } = useBooks()

        onMounted(async () => {
            await getPbaTeam(1)
        })
        return {
            teams,
            getPbaTeam,
            success,
            showEmpty,
        };
    },
};
</script>
  