import Vue from 'vue';
import Vuex from 'vuex';
import router from "@/plugins/router";
import AuthService from "@/services/AuthService";

Vue.use(Vuex);

const store = new Vuex.Store({
    state: {
        user: null,
    },
    mutations: {
        SET_USER(state, user) {
            if (!user) {
                state.user = null;
                return;
            }

            state.user = Object.assign({}, user);
        },
    },
    actions: {
        async getUser({commit}) {
            try {
                const response = await AuthService.getUser();
                commit("SET_USER", response.data.data);
                return response.data.data;
            } catch (error) {
                //
            }
        },
        async logout({commit}) {
            try {
                await AuthService.logout();
                commit("SET_USER", null);

                if (router.currentRoute.name !== "login") {
                    router.push({name: "login"});
                }
            } catch (error) {
                //
            }
        },
    },
    getters: {
        user(state) {
            return state.user;
        },
    }
});

export default store;
