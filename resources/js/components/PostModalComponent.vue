<template>
    <div >
        <!-- Modal -->
        <div 
            class="modal fade" 
            id="postModal" 
            tabindex="-1" 
            aria-labelledby="exampleModalLabel" 
            aria-hidden="true">

            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> {{ post.title }} </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    {{ post.content }}
                </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["post"],
    created(){
        console.log("modal creado - PostModalComponent");
    },
    watch: {
        post: function () {
            $("#postModal").modal("show");
        }
    }
}
</script>