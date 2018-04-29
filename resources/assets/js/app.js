
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/*  Buefy  */

import Vue from 'vue';
import Buefy from 'buefy';
import VueRouter from 'vue-router';
//import 'buefy/lib/buefy.css';


Vue.use(Buefy);
Vue.use(VueRouter);






/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('Reset', require('./components/Reset.vue'));
Vue.component('Saved', require('./components/Saved.vue'));




var comment = require('./components/Comment.vue');





const app = new Vue({
    el: '#app',
    components: {comment},
    
});
