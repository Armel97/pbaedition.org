<template>
    <HeaderComponent />
    <transition name="fade" mode="out-in">
        <router-view />
    </transition>
    <FooterComponent />
</template>
<script>
import HeaderComponent from './components/layouts/HeaderComponent.vue'
import FooterComponent from './components/layouts/FooterComponent.vue'

export default {
    name: 'App',
    components: {
        FooterComponent,
        HeaderComponent,
    }
    
}
</script>
<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}
</style>