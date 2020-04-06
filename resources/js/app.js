require('./bootstrap');
import Vue from 'vue'
import map from './components/map'

const app = new Vue({
    el: '#app',
    components: {
        map,
    }
})
