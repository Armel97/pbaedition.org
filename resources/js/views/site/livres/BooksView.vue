<template>
    <div id="home-6">

        <section class="d-page-banner">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="margin-banner">Nos livres</h1>
                        <ul class="breadcrumb"></ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-details ">
            <div class="container">
                <div class="row">
                    <aside class="col-lg-4 service-detail-side s-padding">
                        <div class="service-c-list">
                            <h3 class="title"> Thématiques </h3>
                            <ul class="c-list">
                                <li @click="getAllBooks(1)">
                                    <a href="#" style="display: flex;">
                                        <span class="icon">
                                            <img style="margin-top: 7px; margin-left: 7px;"
                                                src="./../../../../asset/assets/images/feature-icons/data-recovery.svg"
                                                alt="" />
                                        </span>
                                        <span class="text" style="display: block; margin-top: 5px;">Tout </span>
                                    </a>
                                </li>
                                <template v-for="category in categories" :key="category.id">
                                    <li @click="filterBook(category.id)">
                                        <a href="#" style="display: flex;">
                                            <p><span class="icon">
                                                    <img style="margin-top: 7px; margin-left: 7px;"
                                                        src="./../../../../asset/assets/images/feature-icons/data-recovery.svg"
                                                        alt="" />
                                                </span></p>
                                            <span class="text" style="display: block; margin-top: 5px;">{{ category.libelle }}
                                            </span>
                                        </a>
                                    </li>
                                </template>


                            </ul>
                        </div>

                    </aside>
                    <main class="col-lg-8 service-detail-main s-padding bg-white">

                        <div class="row">
                            <div class="col-md-6 mb-4" v-for="book in books.data" :key="book.id">
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
                                        <a class="pt-btn btn btn-s1" :href="`https://api.whatsapp.com/send?phone=22942225090&text=Bonjour/Bonsoir PBA! \n Je veux commander le livre: ${book.title}.`">Commander</a>
                                    </div>
                                </div>
                            </div>


                            <p class="text-center" v-if="success ===false"> 
                            <img style="margin: auto; height: 50px;" src="./../../../../asset/loader/loading-loading-forever.gif" alt="">
                        </p>
                        

                        </div>
                        <div class="b-pagination" style="margin-top: 20px;">

                            <Bootstrap4Pagination :data="books" @pagination-change-page="getAllBooks" :show-disabled=true
                                :align="right" />
                        </div>





                    </main>

                </div>
            </div>
        </section>


    </div>
</template>

<style scoped>
@import '../../../../asset/next/static/css/style.css';
</style>
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
            getAllCategories, categories, getAllBooks, books, filterBookByCategoryId, success,
        } = useBooks()

        onMounted(async () => {
            await getAllCategories()
            await getAllBooks(1)
        })

        const filterBook = async id => {
            await filterBookByCategoryId(id)

        }




        return {
            categories,
            books,
            getAllBooks,
            filterBook,
            getAllBooks,
            success,
        }
    },
}
</script>