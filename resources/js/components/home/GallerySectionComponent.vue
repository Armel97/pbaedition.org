<template>
  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container">


      <div class="section-title">
        <h2>Galerie</h2>  
        <p>Voici quelques images des éditions Presses Bibliques Africaines.</p>
      </div>

      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*">All</li>
            <li data-filter=".filter-app">1</li>
            <li data-filter=".filter-card" :class="{ 'filter-active': isActivePortfolio }" @click="trigger()">2</li>
            <li data-filter=".filter-web">3</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="./../../../asset/assets/images/thumbs/pba.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Img 1</h4>
              <p>Img</p>
              <div class="portfolio-links">
                <a href="http://pbaeditions.test/images/pba.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Img 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="./../../../asset/assets/images/thumbs/pba.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Png 3</h4>
              <p>Png</p>
              <div class="portfolio-links">
                <a href="http://pbaeditions.test/images/pba.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Png 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="./../../../asset/assets/images/thumbs/pba.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Img 2</h4>
              <p>Img</p>
              <div class="portfolio-links">
                <a href="http://pbaeditions.test/images/pba.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Img 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="./../../../asset/assets/images/thumbs/pba.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Titre 2</h4>
              <p>Titre</p>
              <div class="portfolio-links">
                <a href="http://pbaeditions.test/images/pba.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Titre 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="./../../../asset/assets/images/thumbs/pba.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Png 2</h4>
              <p>Png</p>
              <div class="portfolio-links">
                <a href="http://pbaeditions.test/images/pba.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Png 2"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="./../../../asset/assets/images/thumbs/pba.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Img 3</h4>
              <p>Img</p>
              <div class="portfolio-links">
                <a href="http://pbaeditions.test/images/pba.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Img 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="./../../../asset/assets/images/thumbs/pba.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Titre 1</h4>
              <p>Titre</p>
              <div class="portfolio-links">
                <a href="http://pbaeditions.test/images/pba.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Titre 1"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="./../../../asset/assets/images/thumbs/pba.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Titre 3</h4>
              <p>Titre</p>
              <div class="portfolio-links">
                <a href="http://pbaeditions.test/images/pba.png" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Titre 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="./../../../asset/assets/images/thumbs/pba.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Png 3</h4>
              <p>Png</p>
              <div class="portfolio-links">
                <a href="./../../../asset/assets/images/thumbs/pba.png" data-gallery="portfolioGallery"
                  class="portfolio-lightbox" title="Png 3"><i class="bx bx-plus"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->
</template>
  
<style scoped>
@import './../../../../public/new-assets/assets/vendor/animate.css/animate.min.css';
@import './../../../../public/new-assets/assets/vendor/bootstrap/css/bootstrap.min.css';
@import './../../../../public/new-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css';
@import './../../../../public/new-assets/assets/vendor/boxicons/css/boxicons.min.css';
@import './../../../../public/new-assets/assets/vendor/glightbox/css/glightbox.min.css';
@import './../../../../public/new-assets/assets/vendor/swiper/swiper-bundle.min.css';
@import './../../../../public/new-assets/assets/css/style.css';
</style>
<script>

import { onMounted, ref } from 'vue';
import GLightbox from 'glightbox'
import Swiper from 'swiper'
import PureCounter from "@srexi/purecounterjs";
import useHome from '../../services/home';




export default {
  components: {

  },
  setup() {

    const {
            getGalleryForHome, galleries
        } = useHome()

    const isActivePortfolio = ref(false)
    const act = document.getElementsByClassName('filter-card')

    onMounted(async () => {
      await getGalleryForHome()
      console.log(galleries, 'gallery');


      const select = (el, all = false) => {
        el = el.trim()
        if (all) {
          return [...document.querySelectorAll(el)]
        } else {
          return document.querySelector(el)
        }
      }

      /**
       * Easy event listener function
       */
      const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
          if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener))
          } else {
            selectEl.addEventListener(type, listener)
          }
        }
      }

      /**
       * Easy on scroll event listener 
       */
      const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
      }

      /**
       * Navbar links active state on scroll
       */
      let navbarlinks = select('#navbar .scrollto', true)
      const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
          if (!navbarlink.hash) return
          let section = select(navbarlink.hash)
          if (!section) return
          if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
            navbarlink.classList.add('active')
          } else {
            navbarlink.classList.remove('active')
          }
        })
      }
      window.addEventListener('load', navbarlinksActive)
      onscroll(document, navbarlinksActive)

      /**
       * Scrolls to an element with header offset
       */
      const scrollto = (el) => {
        let header = select('#header')
        let offset = header.offsetHeight

        let elementPos = select(el).offsetTop
        window.scrollTo({
          top: elementPos - offset,
          behavior: 'smooth'
        })
      }

      /**
       * Back to top button
       */
      let backtotop = select('.back-to-top')
      if (backtotop) {
        const toggleBacktotop = () => {
          if (window.scrollY > 100) {
            backtotop.classList.add('active')
          } else {
            backtotop.classList.remove('active')
          }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
      }

      /**
       * Mobile nav toggle
       */
      on('click', '.mobile-nav-toggle', function (e) {
        select('#navbar').classList.toggle('navbar-mobile')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
      })

      /**
       * Mobile nav dropdowns activate
       */
      on('click', '.navbar .dropdown > a', function (e) {
        if (select('#navbar').classList.contains('navbar-mobile')) {
          e.preventDefault()
          this.nextElementSibling.classList.toggle('dropdown-active')
        }
      }, true)

      /**
       * Scrool with ofset on links with a class name .scrollto
       */
      on('click', '.scrollto', function (e) {
        if (select(this.hash)) {
          e.preventDefault()

          let navbar = select('#navbar')
          if (navbar.classList.contains('navbar-mobile')) {
            navbar.classList.remove('navbar-mobile')
            let navbarToggle = select('.mobile-nav-toggle')
            navbarToggle.classList.toggle('bi-list')
            navbarToggle.classList.toggle('bi-x')
          }
          scrollto(this.hash)
        }
      }, true)

      /**
       * Scroll with ofset on page load with hash links in the url
       */
      window.addEventListener('load', () => {
        if (window.location.hash) {
          if (select(window.location.hash)) {
            scrollto(window.location.hash)
          }
        }
      });

      /**
       * Hero carousel indicators
       */
      let heroCarouselIndicators = select("#hero-carousel-indicators")
      let heroCarouselItems = select('#heroCarousel .carousel-item', true)

      heroCarouselItems.forEach((item, index) => {
        (index === 0) ?
          heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>" :
          heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
      });

      /**
       * Porfolio isotope and filter
       */
      window.addEventListener('load', () => {
        let portfolioContainer = select('.portfolio-container');
        if (portfolioContainer) {
          let portfolioIsotope = new Isotope(portfolioContainer, {
            itemSelector: '.portfolio-item',
            layoutMode: 'fitRows'
          });

          let portfolioFilters = select('#portfolio-flters li', true);

          on('click', '#portfolio-flters li', function (e) {
            e.preventDefault();
            portfolioFilters.forEach(function (el) {
              el.classList.remove('filter-active');
            });
            this.classList.add('filter-active');

            portfolioIsotope.arrange({
              filter: this.getAttribute('data-filter')
            });

          }, true);
        }

      });

      /**
       * Initiate portfolio lightbox 
       */
      const portfolioLightbox = GLightbox({
        selector: '.portfolio-lightbox'
      });

      /**
       * Portfolio details slider
       */
      new Swiper('.portfolio-details-slider', {
        speed: 400,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false
        },
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true
        }
      });

      /**
       * Initiate Pure Counter 
       */
      new PureCounter();









      this.lightbox = GLightbox({
        selector: ".glightbox"
      });


















    })

    const trigger = () => {
      isActivePortfolio.value = true
    }


    return {
      trigger,
      isActivePortfolio,
      galleries,
    };
  },
};
</script>
  