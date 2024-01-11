import { createRouter, createWebHistory } from "vue-router";
import HomeView from "./../views/site/HomeView.vue"

const routes = [
    {
        path: '/',
        name: 'HomeView',
        component: () => import('./../views/site/HomeView.vue'),
        meta: {
            title: "Accueil | PBA Éditions, un livre, une expérience",
            description: "Éditions PBA est une maison d’édition, basée à Abomey-Calavi (Bénin), qui publie des ouvrages de langue française écrits par les Africains pour l’édification du corps de Christ dans le monde. Les ouvrages des PBA sont destinés aux étudiants, aux jeunes, aux leaders, aux responsables et membres d’églises, aux familles, aux théologiens etc…",
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
            title: "PBA Éditions | Notre histoire",
            description: "Les éditions Presses Bibliques Africaines (PBA) sont une initiative des Groupes Bibliques Universitaires d’Afrique Francophone (GBUAF)",
        }
    },
    {
        path: '/contact',
        name: 'contact',
        component: () => import('./../views/site/ContactView.vue'),
        meta: {
            title: "PBA Éditions | Nous contacter",
            description: "Notre adresse et nos revendeurs",

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
            title: "PBA Éditions | Nos livres",
            description: "Nos livres sont rangés par thématique.",
        }
    },
    {
        path: '/a-paraitre',
        name: 'a-paraitre',
        component: () => import('./../views/site/livres/AParaitreView.vue'),
        meta: {
            title: "PBA Éditions | Nos livres à paraître",
            description: "La liste des livres à paraître.",
        }
    },
    {
        path: '/livres-hippo',
        name: 'livres-hippo',
        component: () => import('./../views/site/livres/LivresHippoView.vue'),
        meta: {
            title: "PBA Éditions | Nos livres livresHippo",
            description: "La liste des livres livresHippo.",
        }
    },
    {
        path: '/nouveautes',
        name: 'nouveautes',
        component: () => import('./../views/site/livres/NouveautesView.vue'),
        meta: {
            title: "PBA Éditions | Nos livres nouvellement publiés",
            description: "La liste des livres nouvellement publiés.",
        }
    },
    {
        path: '/formations',
        name: 'formations',
        component: () => import('./../views/site/offers/TrainingsView.vue'),
        meta: {
            title: "PBA Éditions | Nos formations",
            description: "La liste de nos formations.",
        }
    },
    {
        path: '/stages',
        name: 'stages',
        component: () => import('./../views/site/offers/InternshipView.vue'),
        meta: {
            title: "PBA Éditions | Offres de stage",
            description: "La liste de nos offres de stage.",

        }
    },
    {
        path: '/prix-excellence',
        name: 'prix-excellence',
        component: () => import('./../views/site/offers/ExcellencyPrice.vue'),
        meta: {
            title: "PBA Éditions | Prix d'excellence",
            description: "Robert Reekie Global Publisher award for 2019.",
        }
    },
    {
        path: '/evenements',
        name: 'evenements',
        component: () => import('./../views/site/EventsView.vue'),
        meta: {
            title: "PBA Éditions | Nos évènements",
            description: "La liste de nos évènements.",
        }
    },
    {
        path: '/about/vision',
        name: 'vision',
        component: () => import('./../views/site/about/VisionView.vue'),
        meta: {
            title: "PBA Éditions | Notre Vision",
            description: "La vision des PBA est : « Transformer le lectorat francophone par la littérature chrétienne de qualité produite par les Africains ».",
        }
    },
    {
        path: '/about/what-we-do',
        name: 'what-we-do',
        component: () => import('./../views/site/about/WhatWeDoView.vue'),
        meta: {
            title: "PBA Éditions | Ce que nous faisons",
            description: "Nos domaines d'intervention.",
        }
    },
    {
        path: '/about/what-we-do/editions',
        name: 'what-we-do.editions',
        component: () => import('./../views/site/about/what-we-do/Editions.vue'),
        meta: {
            title: "PBA Éditions | Éditions",
            description: "C’est le cœur des activités de la maison d’édition. PBA est spécialisée dans l’édition de tout genre littéraire en langue française. Avec une équipe de rédacteurs, de réviseurs, de relecteurs et d’infographes expérimentés, tout service d’édition est assuré à merveille.",
        }
    },
    {
        path: '/about/what-we-do/diffusion',
        name: 'what-we-do.diffusion',
        component: () => import('./../views/site/about/what-we-do/Diffusion.vue'),
        meta: {
            title: "PBA Éditions | Diffusion",
            description: "Pour assurer une bonne exploitation des livres qu’elle publie, la maison d’édition PBA s’appuie sur un vaste réseau de distribution continental. Nos livres sont diffusés dans toute la francophonie par l’intermédiaire de nos représentants, revendeurs, mouvements nationaux des GBU, librairies, etc…",

        }
    },
    {
        path: '/about/what-we-do/formation',
        name: 'what-we-do.formation',
        component: () => import('./../views/site/about/what-we-do/Formation.vue'),
        meta: {
            title: "PBA Éditions | Formation",
            description: "C’est un domaine stratégique des PBA. La maison d’édition investit pour le renforcement des capacités des auteurs et potentiels auteurs pour susciter des manuscrits de qualité. Des formations sont également organisées à l’endroit des professionnels du livre comme les rédacteurs.",
        }
    },
    {
        path: '/about/what-we-do/traduction',
        name: 'what-we-do.traduction',
        component: () => import('./../views/site/about/what-we-do/Traduction.vue'),
        meta: {
            title: "PBA Éditions | Traduction",
            description: "Les PBA disposent d’un service de traduction (anglais français, français anglais). Ce service est ouvert et disponible pour la traduction de tout texte destiné ou non à la publication.",
        }
    },
    {
        path: '/about/what-we-do/publication',
        name: 'what-we-do.publication',
        component: () => import('./../views/site/about/what-we-do/Publication.vue'),
        meta: {
            title: "PBA Éditions | Publication",
            description: "Publier des livres est la mission des PBA. Suivant un contrat d’édition en bonne et due forme avec les différents auteurs, le service de production se charge d’assurer toutes les tâches de production pour passer du manuscrit au livre imprimé.",

        }
    },
    {
        path: '/about/team',
        name: 'team',
        component: () => import('./../components/about/TeamPageComponent.vue'),
        meta: {
            title: "PBA Éditions | Notre équipe",
            description: "Notre équipe",

        }
    },
    {
        path: '/about/gallery',
        name: 'galerie',
        component: () => import('./../components/about/GalleryPageComponent.vue'),
        meta: {
            title: "PBA Éditions | Notre galerie",
            description: "Notre galerie",


        }
    },
    {
        path: '/videos',
        name: 'videos',
        component: () => import('./../components/about/VideoPageComponent.vue'),
        meta: {
            title: "PBA Éditions | Nos vidéos",
            description: "Nos vidéos",

        }
    },
    {
        path: '/gallery',
        name: 'gallery',
        component: () => import('./../components/about/GalleryPageComponent.vue'),
        meta: {
            title: "PBA Éditions | Notre galerie",
            description: "Notre galerie",

        }
    },
    {
        path: '/partners',
        name: 'partners',
        component: () => import('./../components/about/PartnersPageComponent.vue'),
        meta: {
            title: "PBA Éditions | Nos partenaires",
            description: "Nos partenaires",

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

router.beforeEach((to, from, next) => {
    document.title = to.meta.title
    document.description = to.meta.description
    next()
});
// const router = createRouter({ history: createWebHistory(), routes })
export default router