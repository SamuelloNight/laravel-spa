import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import routes from './routes';
import store from './store';

Vue.use(VueRouter);
Vue.use(Vuex);

const router = new VueRouter({
    routes: routes,
    mode: 'history'
});

const storage = new Vuex.Store(store);

const app = new Vue({
    router,
    storage
}).$mount('#app');
