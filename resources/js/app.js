require('./bootstrap');

import axios from 'axios';
import Vue from 'vue/dist/vue.js';

import { store } from './store/store';

const app = new Vue({
    el: '#app',
    store,
    mounted() {
        this.$store.dispatch('get_users')
    },
    computed: {
        users() {
            return this.$store.getters.users
        }
    }
});