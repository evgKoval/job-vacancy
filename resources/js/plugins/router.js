import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from '@/pages/Dashboard';
import Login from '@/pages/Login';
import Register from '@/pages/Register';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'dashboard',
        component: Dashboard,
    },
    {
        path: '/login',
        name: 'login',
        component: Login,
    },
    {
        path: '/register',
        name: 'register',
        component: Register,
    },
];

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;
