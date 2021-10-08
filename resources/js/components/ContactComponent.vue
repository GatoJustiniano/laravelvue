<template>
    <div class="col-8 offset-2">
    
        <div class="card">
            <div class="card-header">
                <img src="/images/logo.png" class="logo_200 mx-auto d-block" alt="logo">
            </div>
            <div class="card-body">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Nombre</span>
                    </div>
                    <input type="text" aria-label="name" class="form-control">
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Apellidos</span>
                    </div>
                    <input type="text" aria-label="lastname" class="form-control">
                </div>

                <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type="email" aria-label="email" class="form-control">
                </div>

                <div class="input-group mt-3">
                    <textarea class="form-control" name="comentarios" id="comentarios"  placeholder="Comentarios">
                    </textarea>
                </div>

                <button class="btn btn-primary btn-lg float-right mt-3">Enviar</button>

            </div>
        </div>
    </div>
</template>

<script>
export default {
    created() {
        
    },
    methods: {
        saveContact: function () {

            return; 
        }
    },


    data: function(){
        return {
            
        }
    },
}
</script>