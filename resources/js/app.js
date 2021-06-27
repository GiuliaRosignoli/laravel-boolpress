

require('./bootstrap');

window.Vue = require('vue');
// window.axios = require('axios');

import App from './App.vue';
import router from './routes';

const root = new Vue({
    el:'#root',
    router,
    render: h=>h(App)
})