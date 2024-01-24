<template>
    <div id="home-6">

        <section class="d-page-banner">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="margin-banner">Nouveautés</h1>
                        <ul class="breadcrumb"></ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="home6-team-s team-area-s2 ">

            <div class="container">

                
                <p class="text-center" v-if="success ===false"> 
                            <img style="margin: auto; height: 50px;" src="./../../../../asset/loader/loading-loading-forever.gif" alt="">
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
                                <a v-if="book.amazon" class="btn-b btn-sm btn-b-danger mb-1" target="_blank" :href="book.amazon">Acheter sur Amazon  </a>
                                        <a class="btn-b btn-sm btn-b-success" :href="`https://api.whatsapp.com/send?phone=22942225090&text=Bonjour/Bonsoir PBA! \n Je veux commander le livre: ${book.title}.`">Commander via WhatsApp</a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center" style="margin-top: -10px;">
                        <span class="s-sub-title" v-if="showEmpty==true">Aucun livre disponible, </span>
                    </p>

                  
                </div>
                <div class="b-pagination" style="margin-top: 20px;">

                <Bootstrap4Pagination :data="books" @pagination-change-page="getBooksNouveautes" :show-disabled=true
                                :align="right" />
                        </div>
            </div>
        </section>

    </div>
</template>
<style scoped>


.btn-b {
  --bs-btn-padding-x: 0.75rem;
  --bs-btn-padding-y: 0.375rem;
  --bs-btn-font-family: ;
  --bs-btn-font-size: 1rem;
  --bs-btn-font-weight: 400;
  --bs-btn-line-height: 1.5;
  --bs-btn-color: var(--bs-body-color);
  --bs-btn-bg: transparent;
  --bs-btn-border-width: var(--bs-border-width);
  --bs-btn-border-color: transparent;
  --bs-btn-border-radius: var(--bs-border-radius);
  --bs-btn-hover-border-color: transparent;
  --bs-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
  --bs-btn-disabled-opacity: 0.65;
  --bs-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
  display: inline-block;
  padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
  font-family: var(--bs-btn-font-family);
  font-size: var(--bs-btn-font-size);
  font-weight: var(--bs-btn-font-weight);
  line-height: var(--bs-btn-line-height);
  color: var(--bs-btn-color);
  text-align: center;
  text-decoration: none;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
  border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
  border-radius: var(--bs-btn-border-radius);
  background-color: var(--bs-btn-bg);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  border-radius: 11px;
}

.btn-sm, .btn-b {
    --bs-btn-padding-y: 0.25rem;
    --bs-btn-padding-x: 0.5rem;
    --bs-btn-font-size: 0.875rem;
    --bs-btn-border-radius: var(--bs-border-radius-sm);
  }
  
  .btn-b-success {
    --bs-btn-color: #fff;
    --bs-btn-bg: #198754;
    --bs-btn-border-color: #198754;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #157347;
    --bs-btn-hover-border-color: #146c43;
    --bs-btn-focus-shadow-rgb: 60, 153, 110;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #146c43;
    --bs-btn-active-border-color: #13653f;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #198754;
    --bs-btn-disabled-border-color: #198754;
  }
  .btn-b-danger {
    --bs-btn-color: #fff;
  --bs-btn-bg: #893003;
  --bs-btn-border-color: #893003;
  --bs-btn-hover-color: #fff;
  --bs-btn-hover-bg: #bb2d3b;
  --bs-btn-hover-border-color: #b02a37;
  --bs-btn-focus-shadow-rgb: 225, 83, 97;
  --bs-btn-active-color: #fff;
  --bs-btn-active-bg: #b02a37;
  --bs-btn-active-border-color: #a52834;
  --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  --bs-btn-disabled-color: #fff;
  --bs-btn-disabled-bg: #893003;
  --bs-btn-disabled-border-color: #893003;
  }
  

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
            getBooksNouveautes, books, success, showEmpty
        } = useBooks()

        onMounted(async () => {
            await getBooksNouveautes(1)
        })


        return {
            books,
            getBooksNouveautes,
            success,
            showEmpty,

        }
    },
}
</script>