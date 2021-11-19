require('./bootstrap');


window.axios = require('axios');
window.Vue = require('vue');

import App from './components/App.vue';
import router from './router.js';
import vueBraintree from 'vue-braintree';
import VueCarousel from 'vue-carousel';
import Aos from "aos";
import Darkmode from 'darkmode-js';

new Darkmode().showWidget();

const options = {
    bottom: '64px', // default: '32px'
    right: 'unset', // default: '32px'
    left: '32px', // default: 'unset'
    time: '0.5s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#fff',  // default: '#fff'
    buttonColorDark: '#000',  // default: '#100f2c'
    buttonColorLight: 'rgb(255, 217, 0)', // default: '#fff'
    saveInCookies: false, // default: true,
    label: '🌓', // default: ''
    autoMatchOsTheme: true // default: true
  }
  
  const darkmode = new Darkmode(options);
  darkmode.showWidget();


Vue.use(Aos.init({
    startEvent: 'scroll',
}));
Vue.use(vueBraintree);
Vue.use(VueCarousel);

const app = new Vue({
    el: '#root',
    router: router,
    render: h => h(App),
});

