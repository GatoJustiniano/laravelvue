/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('list-posts', {
    props: ['title'],
    data: function(){
        return {

            posts2: [
                {
                    title: 'Titulo 1', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba'
                },
                {
                    title: 'Titulo 2', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba'
                },
                {
                    title: 'Titulo 3', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba 3'
                },
                {
                    title: 'Titulo 4', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba4'
                },
                {
                    title: 'Titulo 5', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba 5'
                }
            ],
        }
    },
    template: '<div> <h1>{{title}}</h1> <div class="card" v-for="post in posts2">                  <div class="card-body">             <h5 class="card-title">Card {{post.title}}</h5>             <p class="card-text">{{ post.content }}</p>             <a href="#" class="btn btn-primary">Ver resumen</a>         </div>     </div></div>'
});


const app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        posts: [
            {
                title: 'Titulo 1', 
                image:'1630969529.jpg',
                content:'Next, aplicacion vue de prueba'
            },
            {
                title: 'Titulo 2', 
                image:'1630969529.jpg',
                content:'Next, aplicacion vue de prueba'
            },
            {
                title: 'Titulo 3', 
                image:'1630969529.jpg',
                content:'Next, aplicacion vue de prueba 3'
            },
            {
                title: 'Titulo 4', 
                image:'1630969529.jpg',
                content:'Next, aplicacion vue de prueba4'
            },
            {
                title: 'Titulo 5', 
                image:'1630969529.jpg',
                content:'Next, aplicacion vue de prueba 5'
            }
        ],
    }
});
