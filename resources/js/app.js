/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// import Vue from 'vue/dist/vue.min.js'

window.Vue = require('vue');

// Import vue modlas for user dashboard
import vmodal from 'vue-js-modal'

Vue.use(vmodal)

Vue.component('scanner-component', require('./components/ScannerComponent.vue').default);
Vue.component('autocomplete-component', require('./components/AutocompleteComponent.vue').default);
Vue.component('user-login-register-component', require('./components/UserLoginRegisterComponent.vue').default);
Vue.component('restaurants-search', require('./components/RestaurantsPageSearchComponent.vue').default);
Vue.component('cart-component', require('./components/CartComponent.vue').default);
Vue.component('restaurant-products', require('./components/RestaurantProductsComponent.vue').default);
Vue.component('search-component', require('./components/SearchComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
