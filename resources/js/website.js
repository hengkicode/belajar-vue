require('./bootstrap');

window.vue = require('vue');

vue.component('contact-us-form', require('./components/ContactForm.vue').default);

const app = new vue ({
    el: '#app'
});