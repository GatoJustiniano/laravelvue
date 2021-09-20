<template>
    <div>
        <div v-if="post" >
            <div class="card mt-3 " >
            <div class="card-header" style="width: 18rem;">
                <img v-bind:src=" '/images/' + post.image" class="card-img-top" alt="...">

            </div>
            <div class="card-body">
                <h1 class="card-title">Card {{post.title}}</h1>
                <p class="card-text">{{ post.content }}</p>
            </div>
            </div>
        </div>
        <div v-else>
            <h1>Post no existe</h1>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        console.log("Hola mundo Vue");
    },
    methods: {
        getPost: function (p) {

        }
    },


    data: function(){
        return {
            postSelected: "",
            post: {
                    title: 'Titulo 1 de vue', 
                    image:'1630969529.jpg',
                    content:'Next, aplicacion vue de prueba'
            }
        }
    },
}
</script>