import { createStore } from "vuex";
import useAxios from "../bootstrap";

import router from '../router'

const store = createStore({
    state: {
        user: {
            data: {},
        },
    },
    actions: {

        register({ commit }, user) {
            return useAxios.post('/register', user)
                .then(({ data }) => {

                    useAxios.get('/api/user').then(response => {

                        commit('setUser', response.data);

                    })
                    return data;
                })
        },
        login({ commit }, user) {
            return useAxios.post('/login', user)
                .then(({ data }) => {

                    useAxios.get('/api/user').then(response => {

                        commit('setUser', response.data);

                    })
                    return data;
                })
        },
        logout({ commit }) {
            return useAxios.post('/logout')
                .then(response => {
                    commit('logout')

                    router.push({ name: "Home" });

                    return response;
                })
        },
        getUser({ commit }) {
            return useAxios.get('/api/user')
                .then(res => {
                    commit('setUser', res.data)
                }).catch((err) => {

                    console.log(err);

                });
        },
    },
    mutations: {
        logout: (state) => {
            state.user.data = {};
        },

        setUser: (state, user) => {
            state.user.data = user;
        },
    },


});

export default store;