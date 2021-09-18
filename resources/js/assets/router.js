window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router';
import ListPost from "../components/PostListComponent.vue" ;

const Foo = { template: '<div>foo<router-link to="/foo">Go to Foo</router-link>     <router-link to="/bar">Go to Bar</router-link> <router-link to="/">Home</router-link> </div>' }
const Bar = { template: '<div>bar<router-link to="/foo">Go to Foo</router-link>     <router-link to="/bar">Go to Bar</router-link> </div>' }

Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        { path: '/foo', component: Foo },
        { path: '/bar', component: Bar },
        { path: '/', component: ListPost }
    ]
}); 






