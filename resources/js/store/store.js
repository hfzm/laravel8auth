import axios from 'axios';
import Vue from 'vue/dist/vue.js';
import Vuex from 'vuex';
Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        users: {},
        userData: {
            name: '',
            email: '',
            password: ''
        }
    },
    getters: {
        users: (state) => {
            return state.users
        }
    },
    mutations: {
        set_users: (state, data) => {
            state.users = data
        }
    },
    actions: {
        get_users: (context) => {
            axios.get('api/users').then((response) => {
                context.commit('set_users', response.data)
            }).catch((errors) => {
                console.log(errors)
            });
        },
        storeUser: ({dispatch, commit, state}) => {
            axios.post('api/storeUser', state.userData).then(response => {
                console.log(response.data)
                dispatch('get_users')
            }).catch(errors => {
                console.log(errors)
            });
        }
    },
})