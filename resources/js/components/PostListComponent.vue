<template>
    <div>
        <div class="card mt-3" v-for="post in posts" v-bind:key="post.title">
            <img v-bind:src=" '/images/' + post.image" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card {{post.title}}</h5>
                <p class="card-text">{{ post.content }}</p>
                <button  class="btn btn-primary" v-on:click="postClick(post)">Ver resumen de componente</button>
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
                    title: 'Titulo 1 de vue', 
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
}
</script>