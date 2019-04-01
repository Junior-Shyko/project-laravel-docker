
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

//require('./bootstrap');

//window.Vue = require('vue');
/*
Vue.component('cond', require('./components/CondComponent.vue').default);
Vue.component('InfiniteLoading', require('vue-infinite-loading').default);
Vue.component('user-corrector', require('./components/UserCorrectorComponent.vue').default);
Vue.component('example', require('./components/ExampleComponent.vue').default);
*/

var urlUsers = 'https://jsonplaceholder.typicode.com/users';
new Vue({
  el: '#main',
  created: function () {
    this.getUsers();
  },
  data: {
    lists: []
  },
  methods: {
    getUsers: function () {
      axios.get(urlUsers).then(response => {
        this.lists = response.data
      });
    }
  }
});
