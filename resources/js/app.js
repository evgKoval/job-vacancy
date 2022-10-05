import './bootstrap';
import App from './App.vue';

window.Vue = require('vue').default;

new Vue({
    render: h => h(App),
}).$mount('#app');
