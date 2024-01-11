<template>
    <div>
        <section class="home6-team-s team-area-s2 ">

            <div class="container">

                <div class="s-title-wrap text-center">
                    <h2 class="s-title">Nouveautés </h2>
                </div>
                <div class="row project-slider-container-s1">
                    <p class="text-center" v-if="nouveautes.length === 0"> Vous aurez bientôt la liste des livres à paraître
                    </p>

                    <div class="slick-track ">
                        <swiper :slidesPerView="slideNumber" navigation :spaceBetween="30" :pagination="{
                            clickable: true,
                        }" :modules="modules" class="mySwiper">
                            <swiper-slide v-for="nouveaute in nouveautes" :key="nouveaute.id">
                                <div class="slider-project-s1 s-project-s1">
                                    <div class="thumb"><img :src="nouveaute.image_url" alt="" /></div>
                                    <div class="content">
                                        <div class="p-left">
                                            <h3 class="name">{{ nouveaute.titre }}</h3>
                                            <ul class="p-catagories">
                                                <li><a href="#">{{ nouveaute.author }}</a></li>

                                            </ul>
                                        </div>
                                        <div class="p-right"><router-link to="/nouveautes" class="r-btn"><i
                                                    class="fa-sharp fa-solid fa-angle-right"></i></router-link></div>
                                    </div>
                                </div>
                            </swiper-slide>



                        </swiper>

                    </div>
                    <p class="text-center text-danger mt-3"> <router-link to="/nouveautes" class="btn-sm btn-danger">Voir plus</router-link> </p>

                </div>
            </div>
        </section>

    </div>
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
            getBookNouveauteForHome, nouveautes, success, showEmpty
        } = useHome()

        onMounted(async () => {
            await getBookNouveauteForHome()
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
            nouveautes,
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
  