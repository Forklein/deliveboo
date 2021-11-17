require('./bootstrap');


window.axios = require('axios');
window.Vue = require('vue');

import App from './components/App.vue';
import router from './router.js';
import VueCarousel from 'vue-carousel';
import vueBraintree from 'vue-braintree';

Vue.use(vueBraintree);
Vue.use(VueCarousel);

const app = new Vue({
    el: '#root',
    router: router,
    render: h => h(App),
});