/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('show-room', require('./components/Room.vue').default);

const app = new Vue({
    el: '#app'
});
