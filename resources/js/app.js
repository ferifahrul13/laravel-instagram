
require('./bootstrap');
import Vue from 'vue'
import router from './router'

import App from './layouts/App.vue'

// window.Vue = require('vue');

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// const app = new Vue({
    // el: '#app',
// });
new Vue({
    router,
    el: '#app',
    render: h => h(App)
})
