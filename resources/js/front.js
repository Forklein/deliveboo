require('./bootstrap');


window.axios = require('axios');
window.Vue = require('vue');

import App from './components/App.vue';
import router from './router.js';

import vueBraintree from 'vue-braintree';

Vue.use(vueBraintree);

const app = new Vue({
    el: '#root',
    router: router,
    render: h => h(App),
});