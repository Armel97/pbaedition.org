<template>
       <section class="feature-area-s3 feature-area-s1">
            <div class="container">
                <div class="s-title-wrap text-center">
                    <h2 class="s-title">Nos évènements </h2>
                    <span class="s-sub-title">Nous organisons des évènements pour vous.</span>
                </div>
                <div class="row">
                    <p class="text-center" style="margin-top: -10px;" v-if="events.length===0">
                        <span class="s-sub-title" >Aucun évènements disponible, </span>
                    </p>
                    <template v-for="(evenement, index) in events" :key="evenement.id">
                        <div class="col-xl-4 col-md-6 floating" v-if="index===0" >
                            <div class="feature-s7 active wow animate__animated animate__fadeInLeft" data-wow-duration="1.5s"
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
                
                    <p class="text-center text-danger" style="margin-top: 0px;"> <router-link to="/evenements" class="btn-sm btn-danger">Voir plus</router-link> </p>

                </div>
            </div>
        </section>
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
            getEventForHome, events, success, showEmpty
        } = useHome()
        onMounted(async () => {
            await getEventForHome()
        });
        return {
          modules: [EffectCards],
          events,
        };
      },
    };
  </script>
  