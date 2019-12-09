import Vue from 'vue';

Vue.component('kbg-subscribe', require('./views/KbgSubscribe').default);

new Vue()
    .$mount('#vue-app');
