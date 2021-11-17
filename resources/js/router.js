import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from './components/pages/home.vue';
import MenusList from './components/menus/MenusList.vue';
import Checkout from './components/pages/checkout.vue';
import Contact from './components/pages/contact.vue';
import NotFound from './components/pages/notfound.vue';


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home,
        },
        {
            path: '/user/:id',
            name: 'MenusList',
            component: MenusList,
        },
        {
            path: '/checkout',
            name: 'Checkout',
            component: Checkout
        },
        {
            path: '/contact',
            name: 'Contact',
            component: Contact
        },
        {
            path: '*',
            name: 'NotFound',
            component: NotFound
        },
    ],
});

export default router