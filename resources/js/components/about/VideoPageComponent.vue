<template>
  <div id="home-6">

    <section class="d-page-banner">
      <div class="container">
        <div class="row">
          <div class="content">
            <h1 class="margin-banner">Vidéos</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- ======= Portfolio Section ======= -->
    <section class="home5-feature-area-s5 feature-area-s1 s-padding" style="margin-top: -50px;">
      <div class="container">

        <div class="s-title-wrap text-center">
          <h2 class="s-title">Nos vidéos </h2>
          <p v-if="showEmpty">Aucune vidéo n'est disponible actuellement </p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" v-for="galery in videos.data" :key="galery.id">
            <iframe :src="galery.youtube" allowfullscreen style="display: block; margin: auto;"></iframe>
            <h5 class="mt-3 mb-2 text-center">
              {{ galery.titre }}
            </h5>
            <p class="text-center mb-5">{{ galery.description }}</p>

          </div>



        </div>
        <Bootstrap4Pagination :data="videos" @pagination-change-page="getVideos" :show-disabled=true :align="right" />
      </div>

    </section><!-- End Portfolio Section -->


  </div>
</template>
  
<style scoped>
</style>
<script>

import { onMounted, ref } from 'vue';
import useHome from '../../services/home';
import { Bootstrap4Pagination } from 'laravel-vue-pagination';




export default {
  components: {
    Bootstrap4Pagination,
  },
  setup() {
    const {
      getVideos, videos, showEmpty
    } = useHome()

    onMounted(async () => {
      await getVideos(1)

    })

  

    return {
      videos,
      getVideos,
      showEmpty,
    };
  },
};
</script>
    