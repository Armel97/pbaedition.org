<template>
    <div id="home-6">

        <section class="d-page-banner">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="margin-banner">LivresHippo</h1>
                        <ul class="breadcrumb"></ul>
                    </div>
                </div>
            </div>
        </section>


        <section class="project-slider-area-s2">
            <div class="container">
                <div class="s-title-wrap text-center">
                    <h2 class="s-title">Les livresHippo</h2>
                </div>

                <p class="text-center" v-if="success === false">
                    <img style="margin: auto; height: 50px;" src="./../../../../asset/loader/loading-loading-forever.gif"
                        alt="">
                </p>
                <div class="row project-slider-container-s2">
                    <div class="col-md-4 mb-5" v-for="book in books.data" :key="book.id">

                        <div class="pricing-t-s1 shadow">
                            <div class="pt-header">

                                <div class="pt-ribbon">{{ book.real_price }} Fcfa</div>
                            </div>
                            <img :src="book.image_url" alt="" />
                            <div class="price description-book mt-2">

                                <span class="p-suf" style="font-weight:bolder">Auteur : </span> {{ book.author }}
                                <p>
                                    {{ book.description }}
                                </p>
                            </div>
                            <div class="pt-footer">
                                <a class="pt-btn btn btn-s1"
                                    :href="`https://api.whatsapp.com/send?phone=22942225090&text=Bonjour/Bonsoir PBA! \n Je veux commander le livre: ${book.title}.`">Commander</a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center" style="margin-top: -10px;">
                        <span class="s-sub-title" v-if="showEmpty == true">Aucun livre disponible, </span>
                    </p>


                </div>
                <div class="b-pagination" style="margin-top: 20px;">

                    <Bootstrap4Pagination :data="books" @pagination-change-page="getLivresHipp" :show-disabled=true
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
    name: 'LivresHippoView',
    components: {
        Bootstrap4Pagination,
    },

    setup() {
        const {
            getLivresHipp, books, success, showEmpty
        } = useBooks()

        onMounted(async () => {
            await getLivresHipp(1)
        })



        return {
            books,
            getLivresHipp,
            success,
            showEmpty,

        }
    },
}
</script>