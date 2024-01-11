<template>
    <div id="home-6">

        <section class="d-page-banner">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="margin-banner">À paraître</h1>
                        <!-- <ul class="breadcrumb"></ul> -->
                    </div>
                </div>
            </div>
        </section>

        <section class="project-slider-area-s2">
            <div class="container">
            <p class="text-center" v-if="success ===false"> 
                <img style="margin: auto; height: 50px;" src="./../../../../asset/loader/loading-loading-forever.gif" alt="">
            </p>
              

                <div class="row project-slider-container-s2">
                    <div class="col-md-4 mb-5" v-for="book in books.data" :key="book.id">
                        <div class="slick-slider slick-initialized" dir="ltr">
                            <div class="slick-list ">
                                <div class="slick-track ">
                                    <div class="s-project-s2">
                                        <div class="s-project-s2-inner">
                                            <div class="thumb text-center"><img
                                                    :src="book.image_url"
                                                    alt="" /></div>
                                            <div class="content">
                                                <p>{{ book.title }} </p>
                                                <h3><a href="#">{{ book.author }}</a></h3>
                                                <!-- <a class="btn" href="pricing"><i
                                                        class="fa-solid fa-arrow-right"></i>
                                                    </a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <p class="text-center" style="margin-top: -10px;">
                        <span class="s-sub-title" v-if="showEmpty==true">Aucun livre disponible, </span>
                    </p>

                  
                </div>
                <div class="b-pagination" style="margin-top: 20px;">

                <Bootstrap4Pagination :data="books" @pagination-change-page="getBooksAParaitre" :show-disabled=true
                                :align="right" />
                        </div>

            </div>
        </section>

    </div>
</template>

<script>
import { onMounted } from 'vue'
import useBooks from '../../../services/books';
import { Bootstrap4Pagination } from 'laravel-vue-pagination';

export default {
    name: 'BookView',
    components: {
        Bootstrap4Pagination,
    },

    setup() {
        const {
            getBooksAParaitre, books, success, showEmpty
        } = useBooks()

        onMounted(async () => {
            await getBooksAParaitre(1)
        })



        return {
            books,
            getBooksAParaitre,
            success,
            showEmpty,

        }
    },
}
</script>