require('./bootstrap');


window.axios = require('axios');
window.Vue = require('vue');

import App from './components/App.vue';
import router from './router.js';
import vueBraintree from 'vue-braintree';
import VueCarousel from 'vue-carousel';
import Aos from "aos";


Vue.use(Aos.init());
Vue.use(vueBraintree);
Vue.use(VueCarousel);

const app = new Vue({
    el: '#root',
    router: router,
    render: h => h(App),
});