import { createApp } from 'vue'
import App from './App.vue'
const app = createApp(App)
import { router } from './router'


// set up vuetify with theme and icons
// Vuetify
import "vuetify/styles";
import { createVuetify } from "vuetify";
import * as components from "vuetify/components";
import * as directives from "vuetify/directives";
import 'vuetify/dist/vuetify.min.css'

const vuetify = createVuetify({
  components,
  directives,
});



// app.component('MainComponent', MainComponent)
app.use(router)
app.use(vuetify);

app.mount('#app')