
require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

import Index from './components/Index.vue';
import Profile from './components/Profile.vue';
import Contact from './components/Contact.vue';


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const routes = [
    { path: '/', component: Index },
    { path: '/profile', component: Profile },
    { path: '/contact', component: Contact }
  ]

const router = new VueRouter({
    routes // short for `routes: routes`
})  


const app = new Vue({
    router
  }).$mount('#app')
