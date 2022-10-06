import './bootstrap';
import router from '@/plugins/router';
import store from "@/plugins/store";
import App from './App.vue';

window.Vue = require('vue').default;

store.dispatch('getUser').then(() => {
    new Vue({
        router,
        store,
        render: h => h(App),
    }).$mount('#app');
});
