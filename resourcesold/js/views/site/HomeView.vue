<template>
    <div id="home-6">
        <banner-component />
        <PrefectSectionComponent />
        <!-- <CardComponent /> -->
        <AboutSectionComponent />
        <AParaitreSectionComponent />
        <NouveauteSectionComponent />
       
        <div class="container">
            <SlideForThreeSectionComponent />
        </div>

        <TeamSectionComponent />
        <EventsSectionComponent />
   
        <PartenairesSectionComponent />
        <!-- <BookSectionComponent /> -->
        <!-- <ParagraphSectionComponent /> -->
        <!-- <CubeSectionComponent /> -->
        
        <OurGalleryComponent />
        <!-- <MakeDonationSectionComponent /> -->


    </div>
</template>
<style scoped>
@import './../../../asset/next/static/css/style.css';
</style>
<script>
import BannerComponent from '../../components/home/BannerComponent.vue';
import SlideForThreeSectionComponent from '../../components/home/SlideForThreeSectionComponent.vue';
import MakeDonationSectionComponent from '../../components/home/MakeDonationSectionComponent.vue';
import EventsSectionComponent from '../../components/home/EventsSectionComponent.vue';
import CubeSectionComponent from '../../components/home/CubeSectionComponent.vue';
import ParagraphSectionComponent from '../../components/home/ParagraphSectionComponent.vue';
import BookSectionComponent from '../../components/home/BookSectionComponent.vue';
import PartenairesSectionComponent from '../../components/home/PartenairesSectionComponent.vue';
import CardComponent from '../../components/home/CardComponent.vue';
import TeamSectionComponent from '../../components/home/TeamSectionComponent.vue';
import PrefectSectionComponent from '../../components/home/PrefectSectionComponent.vue';
import AboutSectionComponent from '../../components/home/AboutSectionComponent.vue';
import NouveauteSectionComponent from '../../components/home/NouveauteSectionComponent.vue';
import AParaitreSectionComponent from '../../components/home/AParaitreSectionComponent.vue';
import OurGalleryComponent from '../../components/home/OurGalleryComponent.vue';
export default {
    name: 'HomeView',
    components: {
    BannerComponent,
    BookSectionComponent,
    AboutSectionComponent,
    TeamSectionComponent,
    PrefectSectionComponent,
    SlideForThreeSectionComponent,
    ParagraphSectionComponent,
    CubeSectionComponent,
    PartenairesSectionComponent,
    MakeDonationSectionComponent,
    EventsSectionComponent,
    NouveauteSectionComponent,
    AParaitreSectionComponent,
    OurGalleryComponent
}
}
</script>