<template>
    <div>
        <div class="card mt-3 " style="width: 18rem;" v-for="post in posts" v-bind:key="post.title">
            <img v-bind:src=" '/images/' + post.image" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card {{post.title}}</h5>
                <p class="card-text">{{ post.content }}</p>
                <button  class="btn btn-primary" v-on:click="postClick(post)">Ver resumen de componente</button>
                <router-link class="btn btn-success" :to="{ name: 'detail', params: {id: post.id } }">ver</router-link>
            </div>
        </div>
        <modal-post :post="postSelected"></modal-post>
    </div>
</template>

<script>
export default {
    created() {
        this.getPosts()
    },
    methods: {
        postClick: function (p) {
            this.postSelected = p;
        },
        getPosts(){
            console.log("prueba de post api " + this.route.params.category_id );
            fetch('/api/post/'+ this.route.params.category_id + "/category")
            .then( response => response.json() )
            .then( json => {
                this.posts = json.data.posts.data,
                this.category = json.data.category.data
            } );

        }
    },


    data: function(){
        return {
            postSelected: "",
            posts: [
                
            ],
            category: "",
        }
    },
}
</script>