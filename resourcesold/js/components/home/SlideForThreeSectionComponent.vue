
<template>
    <div class="container" style="margin: 60px 0;">
        <div class="s-title-wrap text-center">
            <!-- <span class="s-sub-title">Nos Livres</span> -->
            <h2 class="s-title">Nos livres</h2>
        </div>
        <p class="text-center" v-if="livresAll.length===0"> Vous aurez bientôt la liste des livres </p>

        <swiper :slidesPerView="slideNumber" navigation :spaceBetween="30" :pagination="{
            clickable: true,
        }" :modules="modules" class="mySwiper">
            <swiper-slide v-for="livre in livresAll" :key="livre.id"><img :src="livre.image_url"
                    alt=""></swiper-slide>
            
        </swiper>

        <p class="text-center text-danger mt-3"> <router-link to="/livres" class="btn-sm btn-danger">Voir plus</router-link> </p>

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
            getBookLivresForHome, livresAll, success, showEmpty
        } = useHome()
        onMounted(async () => {
            await getBookLivresForHome()
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
            livresAll,
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

  