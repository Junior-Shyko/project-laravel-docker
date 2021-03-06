
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
  
Vue.component('cond', require('./components/CondComponent.vue').default);
Vue.component('InfiniteLoading', require('vue-infinite-loading').default);
Vue.component('user-corrector', require('./components/UserCorrectorComponent.vue').default);
Vue.component('user', require('./components/user/UserComponent.vue').default);
Vue.component('edit-user', require('./components/user/edit.vue').default);


const app = new Vue({
    el: '#app'
});

$(document).ready(function () {
  PNotify.prototype.options.styling = "fontawesome";
});
