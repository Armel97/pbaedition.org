<template>
        <section class="project-slider-area-s2">

            <div class="container">
                <div class="s-title-wrap text-center" >
                    <h2 class="s-title">À paraître  </h2>
                </div>

                <div class="row project-slider-container-s2">
                    <p class="text-center" v-if="livres.length===0"> Vous aurez bientôt la liste des livres à paraître</p>
                    <div class="slick-slider slick-initialized" dir="ltr">
                        <div class="slick-list ">
                            <div class="slick-track ">
                                <swiper :slidesPerView="slideNumber" navigation :spaceBetween="30" :pagination="{
                                    clickable: true,
                                }" :modules="modules" class="mySwiper">
                                    <swiper-slide v-for="livre in livres" :key="livre.id">
                                        <div class="s-project-s2">
                                            <div class="s-project-s2-inner">
                                                <div class="thumb text-center"><img
                                                        :src="livre.image_url"
                                                        alt="" /></div>
                                                <div class="content">
                                                    <p>{{ livre.titre }} </p>
                                                    <h3><a href="#">{{ livre.author}}</a></h3>
                                                    <!-- <a class="btn" href="#"><i class="fa-solid fa-arrow-right"></i></a> -->
                                                </div>
                                            </div>
                                        </div>

                                    </swiper-slide>
                                  
                                    

                                </swiper>

                            </div>
                        </div>

                    </div>
                <p class="text-center text-danger mt-3"> <router-link to="/a-paraitre" class="btn-sm btn-danger">Voir plus</router-link> </p>

                </div>
            </div>
        </section>
</template>

<script scoped>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';

import 'swiper/css/pagination';

import './style.css';

// import required modules
import { Navigation, Pagination } from 'swiper';
import { computed, onMounted, ref } from 'vue';
import useHome from '../../services/home';

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const {
            getBookAParaitreForHome, livres, success, showEmpty
        } = useHome()

        
        onMounted(async () => {
            await getBookAParaitreForHome()
            console.log(livres);
        });

        const slideNumber = computed(() => {
            if (window.innerWidth < 767) {
                return 1

            } else if (window.innerWidth > 767 && window.innerWidth < 900) {
                return 2

            } else {
                return 3

            }
        })

        return {
            modules: [Navigation, Pagination],
            slideNumber,
            livres,
        };
    },
};
</script>

<style scoped>
.swiper {
    width: 100%;
    height: 100%;
}

.swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    /* display: block;
width: 100%;
height: 100%; */
    object-fit: cover;
}
</style>
  