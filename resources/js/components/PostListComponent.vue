<template>
    <div>
        <div class="card mt-3 " style="width: 18rem;" v-for="post in posts" v-bind:key="post.title">
            <img v-bind:src=" '/images/' + post.image" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card {{post.title}}</h5>
                <p class="card-text">{{ post.content }}</p>
                <button  class="btn btn-primary" v-on:click="postClick(post)">Ver resumen de componente</button>
                <router-link class="btn btn-success" :to=" 'detail/' + post.id">ver</router-link>
            </div>
        </div>
        <modal-post :post="postSelected"></modal-post>
    </div>
</template>

<script>
export default {
    methods: {
        postClick: function (p) {
            this.postSelected = p;
        }
    },


    data: function(){
        return {
            postSelected: "",
            posts: [
                {
                    id: 1,
                    title: 'Titulo 1 de vue', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba'
                },
                {
                    id: 2,
                    title: 'Titulo 2', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba'
                },
                {
                    id: 3,
                    title: 'Titulo 3', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba 3'
                },
                {
                    id: 4,
                    title: 'Titulo 4', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba4'
                },
                {
                    id: 5,
                    title: 'Titulo 5', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba 5'
                }
            ],
        }
    },
}
</script>