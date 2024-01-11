<template>
  
   
    <swiper
      :effect="'cards'"
      :grabCursor="true"
      :modules="modules"
      class="mySwiper " 
    >
      <swiper-slide v-for="livre in livresAll" :key="livre.id"><img :src="livre.image_url" alt=""></swiper-slide>
     
    </swiper>


  </template>
  <script scoped>
    // Import Swiper Vue.js components
    import { Swiper, SwiperSlide } from 'swiper/vue';
  
    // Import Swiper styles
    import 'swiper/css';
  
    import 'swiper/css/effect-cards';
  
    import './style.css';
  
    // import required modules
    import { EffectCards } from 'swiper';
    import useHome from '../../services/home';
    import { onMounted } from 'vue';

    export default {
      components: {
        Swiper,
        SwiperSlide,
      },
      setup() {
        const {
            getBookLivresForHome, livresAll, success, showEmpty
        } = useHome()
        onMounted(async () => {
            await getBookLivresForHome()
        });
        return {
          modules: [EffectCards],
          livresAll,
        };
      },
    };
  </script>
  