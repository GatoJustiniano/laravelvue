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
        <v-pagination v-model="currentPage" :page-count="total"></v-pagination>
    </div>
</template>

<script>

import vPagination from 'vue-plain-pagination';

export default {
    props: ["posts"],
    methods: {
        postClick: function (p) {
            this.postSelected = p;
        }
    },


    data: function(){
        return {
            postSelected: "",
            currentPage: 1,
        }
    },
    components: {vPagination},
}
</script>