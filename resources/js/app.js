/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuetify from '../plugins/vuetify';
import Vuelidate from 'vuelidate'

Vue.component('paw-component', require('./components/PawComponent').default);
Vue.component('compensation-component', require('./components/CompensationForm').default);



const app = new Vue({
    Vuelidate,
    vuetify: Vuetify,
    el: '#app',
});