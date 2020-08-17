require('./bootstrap');

window.vue = require('vue');

import axios from 'axios'
import VueAxios from 'vue-axios'
 
Vue.use(VueAxios, axios)

vue.component('contact-us-form', require('./components/ContactForm.vue').default);

const app = new vue ({
    el: '#app'
});