<template>
  <section class="home6-team-s team-area-s2">
    <div class="container">
      <div class="s-title-wrap">
        <h2>Notre équipe</h2>
      </div>
      <div class="row team-slider-s1">
        <div class="col-lg-3 col-sm-6" style="margin-bottom: 70px;" v-for="team in allTeams" :key="team.id">
          <div class="single-team-s3 single-team-s2">
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
       
        <p class="text-center text-danger" style="margin-top: -40px;"> <router-link to="/about/team" class="btn-sm btn-danger">Voir plus</router-link> </p>

      </div>
    </div>
  </section>
</template>
  
<style scoped>
/* @import './../../../asset/next/static/css/style.css'; */
</style>
<script scoped>
import useHome from '../../services/home';
import { onMounted } from 'vue';


export default {
  components: {

  },
  setup() {
    const {
            getTeamForHome, allTeams, success, showEmpty
        } = useHome()
        onMounted(async () => {
            await getTeamForHome()
        });
    return {
      allTeams,
    };
  },
};
</script>
  