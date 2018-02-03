import router from './router/index'
import store from './vuex/index'

window._ = require('lodash');
window.Vue = require('vue');
window.axios = require('axios')

Vue.component('app', require('./components/App'));

const app = new Vue({
    router: router,
    store: store,
    el: '#app'
});
