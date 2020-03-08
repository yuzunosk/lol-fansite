/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue'
import Router from './router'
import Paginate from 'vuejs-paginate'

require('./bootstrap');

window.Vue = require('vue');
Vue.component('paginate', Paginate)



Vue.component('example-component', require('./components/ExampleComponent.vue').default);


const app = new Vue({
    el: '#app1',
    router: Router
});



