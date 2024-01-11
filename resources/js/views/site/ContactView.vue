<template>
    <!-- <header-component /> -->
    <div id="home-6">

        <section class="d-page-banner">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="margin-banner">Contact</h1>

                    </div>
                </div>
            </div>
        </section>
        <section class="contact-form-area s-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                        <div class="contact-info">
                            <h2 class="s-title">Nous contacter </h2>
                            <!-- <span class="s-sub-title">Faites-nous part de vos besoins</span> -->
                            <div class="c-info-box-wrap"><a class="c-info-box" href="tel:+22961422444">
                                    <div class="icon"><img src="./../../../asset/assets/images/feature-icons/phone.png"
                                            alt="" />
                                    </div>
                                    <div class="content"><span>Téléphone</span>
                                        <h4>+229 42-22-50-90</h4>
                                    </div>
                                </a><a class="c-info-box" href="mailto:info@pbaeditions.org">
                                    <div class="icon"><img src="./../../../asset/assets/images/feature-icons/evelope.png"
                                            alt="" />
                                    </div>
                                    <div class="content"><span>Email</span>
                                        <h4>info@pbaeditions.org</h4>
                                    </div>
                                </a><a class="c-info-box"
                                    href="https://www.google.com/maps/place/QuomodoSoft/@23.8002524,90.359203,13z/data=!4m5!3m4!1s0x0:0x1dea3ec2f7a32054!8m2!3d23.8152118!4d90.3665415">
                                    <div class="icon"><img src="./../../../asset/assets/images/feature-icons/pin.png"
                                            alt="" /></div>
                                    <div class="content"><span>Localisation</span>
                                        <h4>Calavi Zopah, Rue de Supermarché du Pont</h4>
                                    </div>
                                </a></div>
                        
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form-s1">
                            <p class="alert bg-success text-center text-white mb-5" v-if="sent">
                                Message envoyé avec succès
                            </p>
                            <form @submit.prevent="sendContact">
                                <input type="text" v-model="contactForm.name" placeholder="Votre Nom*" required="" /><input
                                    type="number" v-model="contactForm.phone" placeholder="Téléphone*" required="" /><input
                                    type="email" v-model="contactForm.email" placeholder="Email*" required="" /><input
                                    type="text" v-model="contactForm.subject" placeholder="Objet*" required="" /><textarea
                                    v-model="contactForm.message" cols="30" rows="10" placeholder="Message"></textarea>
                                <button type="submit">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h3 class="text-center mt-5 mb-3"> Nos revendeurs:</h3>
                            <div class="col-md-3" v-for="distributeur in distributeurs" :key="distributeur.id">
                                <p>
                                    <strong>{{ distributeur.country}} :</strong> {{ distributeur.phone }}
                                </p>
                            </div>

                </div>
            </div>
        </section>




        <section class="map-section">
            <div class="row">
                <div class="col-12"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2948.666506087688!2d2.3552015501593795!3d6.478218112180867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9382762cfb3%3A0x73b33fd2ed8ba7ce!2sPresses%20Bibliques%20Africaines%20Sarl!5e0!3m2!1sfr!2sbj!4v1680881711368!5m2!1sfr!2sbj"
                        width="600" height="450" style="border:0" loading="lazy"
                        referrerPolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
        </section>





    </div>
</template>

<style scoped>
@import './../../../asset/next/static/css/style.css';
</style>
<script>
import HeaderComponent from '../../components/layouts/HeaderComponent.vue'
import useBooks from '../../services/books';
import useHome from '../../services/home';
import { onMounted, reactive } from 'vue';

export default {
    name: 'HomeView',
    components: {
        HeaderComponent,
    },
    setup() {
        const {
            handleContactForm, sent
        } = useHome()
        const {
            getDistributeurs, distributeurs
        } = useBooks()
        onMounted(async () => {
            getDistributeurs(1)
        })

        const contactForm = reactive({
            email: '',
            name: '',
            phone: '',
            subject: '',
            message: '',
        })
        const sendContact = async () => {
            await handleContactForm({ ...contactForm });
            contactForm.email = ''
            contactForm.name = ''
            contactForm.phone = ''
            contactForm.subject = ''
            contactForm.message = ''
            // success.value=true

        }


        return {
            contactForm,
            sendContact,
            sent,
            distributeurs,
        };
    },
}
</script>