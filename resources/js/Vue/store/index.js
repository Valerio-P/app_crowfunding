import { createStore } from "vuex";
import axiosClient from "axios";

import router from '../router'

const url = window.location.origin

const store = createStore({
    state: {
        user: {
            data: {},
        },
    },
    actions: {

        register({ commit }, user) {
            return axiosClient.post(url + '/register', user)
                .then(({ data }) => {

                    axiosClient.get(url + '/api/user').then(response => {

                        commit('setUser', response.data);

                    })
                    return data;
                })
        },
        login({ commit }, user) {
            return axiosClient.post(url + '/login', user)
                .then(({ data }) => {

                    axiosClient.get(url + '/api/user').then(response => {

                        commit('setUser', response.data);

                    })
                    return data;
                })
        },
        logout({ commit }) {
            return axiosClient.post(url + '/logout')
                .then(response => {
                    commit('logout')

                    router.push({ name: "Home" });

                    return response;
                })
        },
        getUser({ commit }) {
            return axiosClient.get(url + '/api/user')
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