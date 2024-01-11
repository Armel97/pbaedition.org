import { createRouter, createWebHistory } from "vue-router";
import HomeView from "./../views/site/HomeView.vue"

const routes = [
    {
        path: '/',
        name: 'HomeView',
        component: () => import('./../views/site/HomeView.vue'),
        meta: {
            pageTitle: 'Accueil',
        }
    },
    {
        path: '/home',
        name: 'test',
        component: () => import('./../views/site/HomeView.vue'),
        meta: {
            pageTitle: 'Accueil',
        }
    },
    {
        path: '/about',
        name: 'AboutView',
        component: () => import('./../views/site/AboutView.vue'),
        meta: {
            pageTitle: 'A Propos de nous',
        }
    },
    {
        path: '/contact',
        name: 'contact',
        component: () => import('./../views/site/ContactView.vue'),
        meta: {
            pageTitle: 'Nous contacter',
        }
    },
    {
        path: '/books',
        name: 'books',
        component: () => import('./../views/site/livres/BooksView.vue'),
        meta: {
            pageTitle: 'Nos livres',
        }
    },
    {
        path: '/livres',
        name: 'livres',
        component: () => import('./../views/site/livres/BooksView.vue'),
        meta: {
            pageTitle: 'Nos livres',
        }
    },
    {
        path: '/a-paraitre',
        name: 'a-paraitre',
        component: () => import('./../views/site/livres/AParaitreView.vue'),
        meta: {
            pageTitle: 'Nos livres à paraitre',
        }
    },
    {
        path: '/livres-hippo',
        name: 'livres-hippo',
        component: () => import('./../views/site/livres/LivresHippoView.vue'),
        meta: {
            pageTitle: 'Nos livresHippo',
        }
    },
    {
        path: '/nouveautes',
        name: 'nouveautes',
        component: () => import('./../views/site/livres/NouveautesView.vue'),
        meta: {
            pageTitle: 'Nos livres nouveaux',
        }
    },
    {
        path: '/formations',
        name: 'formations',
        component: () => import('./../views/site/offers/TrainingsView.vue'),
        meta: {
            pageTitle: 'Nos Formations',
        }
    },
    {
        path: '/stages',
        name: 'stages',
        component: () => import('./../views/site/offers/InternshipView.vue'),
        meta: {
            pageTitle: 'Offres de stage',
        }
    },
    {
        path: '/prix-excellence',
        name: 'prix-excellence',
        component: () => import('./../views/site/offers/ExcellencyPrice.vue'),
        meta: {
            pageTitle: 'Prix d\excellence',
        }
    },
    {
        path: '/evenements',
        name: 'evenements',
        component: () => import('./../views/site/EventsView.vue'),
        meta: {
            pageTitle: 'Nos Evènements',
        }
    },
    {
        path: '/about/vision',
        name: 'vision',
        component: () => import('./../views/site/about/VisionView.vue'),
        meta: {
            pageTitle: 'Notre Vision',
        }
    },
    {
        path: '/about/what-we-do',
        name: 'what-we-do',
        component: () => import('./../views/site/about/WhatWeDoView.vue'),
        meta: {
            pageTitle: 'Ce que nous faison',
        }
    },
    {
        path: '/about/what-we-do/editions',
        name: 'what-we-do.editions',
        component: () => import('./../views/site/about/what-we-do/Editions.vue'),
        meta: {
            pageTitle: 'Éditions',
        }
    },
    {
        path: '/about/what-we-do/diffusion',
        name: 'what-we-do.diffusion',
        component: () => import('./../views/site/about/what-we-do/Diffusion.vue'),
        meta: {
            pageTitle: 'Diffusion',
        }
    },
    {
        path: '/about/what-we-do/formation',
        name: 'what-we-do.formation',
        component: () => import('./../views/site/about/what-we-do/Formation.vue'),
        meta: {
            pageTitle: 'Formation',
        }
    },
    {
        path: '/about/what-we-do/traduction',
        name: 'what-we-do.traduction',
        component: () => import('./../views/site/about/what-we-do/Traduction.vue'),
        meta: {
            pageTitle: 'traduction',
        }
    },
    {
        path: '/about/what-we-do/publication',
        name: 'what-we-do.publication',
        component: () => import('./../views/site/about/what-we-do/Publication.vue'),
        meta: {
            pageTitle: 'publication',
        }
    },
    {
        path: '/about/team',
        name: 'team',
        component: () => import('./../components/about/TeamPageComponent.vue'),
        meta: {
            pageTitle: 'Notre Equipe',
        }
    },
    {
        path: '/about/gallery',
        name: 'galerie',
        component: () => import('./../components/about/GalleryPageComponent.vue'),
        meta: {
            pageTitle: 'Notre Equipe',
        }
    },
    {
        path: '/videos',
        name: 'videos',
        component: () => import('./../components/about/VideoPageComponent.vue'),
        meta: {
            pageTitle: 'Nos vidéos',
        }
    },
    {
        path: '/gallery',
        name: 'gallery',
        component: () => import('./../components/about/GalleryPageComponent.vue'),
        meta: {
            pageTitle: 'Notre galerie',
        }
    },
    {
        path: '/partners',
        name: 'partners',
        component: () => import('./../components/about/PartnersPageComponent.vue'),
        meta: {
            pageTitle: 'Nos partenaires',
        }
    },
    {
        path: '/countries',
        name: 'countries',
        component: () => import('./../components/about/MembershipPageComponent.vue'),
        meta: {
            pageTitle: 'Nos pays membres',
        }
    },
]



const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
    scrollBehavior() {
        return { top: 0, left: 0 }
      }

    
  })
// const router = createRouter({ history: createWebHistory(), routes })
export default router