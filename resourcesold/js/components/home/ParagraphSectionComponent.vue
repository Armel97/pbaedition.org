<template>
  <swiper
    :slidesPerView="3"
    :grid="{
      rows: 2,
    }"
    :spaceBetween="30"
    :pagination="{
      clickable: true,
    }"
    :modules="modules"
    class="mySwiper"
  >
   
  <swiper-slide><img src="./../../../asset/assets/site-images/books/Couverture_Je_prépare_mon_mariage_une.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="./../../../asset/assets/site-images/books/Comment-se-réconcilier-avec-Dieu.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="./../../../asset/assets/site-images/books/Daniel-modèle-du-leader-africain.jpg" alt=""></swiper-slide>
      <swiper-slide><img src="./../../../asset/assets/site-images/books/Guide-de-conseil-prémarital.jpeg" alt=""></swiper-slide>
      <swiper-slide><img src="./../../../asset/assets/site-images/books/La-fornication-Couv1.jpg" alt=""></swiper-slide>
     
  </swiper>
</template>
<script>
  // Import Swiper Vue.js components
  import { Swiper, SwiperSlide } from 'swiper/vue';

  // Import Swiper styles
  import 'swiper/css';

  import 'swiper/css/grid';
  import 'swiper/css/pagination';

  import './style.css';

  // import required modules
  import { Grid, Pagination } from 'swiper';

  export default {
    components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      return {
        modules: [Grid, Pagination],
      };
    },
  };
</script>
<style scoped>

.swiper {
  /* width: 100%;
  height: 100%;
  margin-left: auto;
  margin-right: auto; */
}

.swiper-slide {
  text-align: center;
  font-size: 18px;
  background: #fff;
  height: calc((100% - 30px) / 2) !important;

  /* Center slide text vertically */
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>