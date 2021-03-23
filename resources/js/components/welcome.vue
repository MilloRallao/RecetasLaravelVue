<template @addReceta="getDataRecetas">

    <div v-for="receta in recetas" class="col-lg-4 col-md-6 mb-4">
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
                <h4 v-text="receta.nombre_receta" class="card-title"></h4>
                <p v-text="receta.nombre_categoria" class="card-text"></p>
                <ul class="list-group list-group-flush text-left">
                    <li v-for="ingrediente in receta.ingredientes" v-text="ingrediente" class="list-group-item"></li>
                </ul>
            </div>
            <div class="card-footer">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <button type="button" class="btn btn-primary float-left">Editar <i class="bi bi-pencil-square"></i></button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger float-right">Borrar <i class="bi bi-trash-fill"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "welcome",
    data() {
        return {
            recetas: []
        };
    },
    created() {
        this.getDataRecetas();
    },
    methods:{
        getDataRecetas() {
            axios.get('/getDataRecetas').then(data => {
                console.log(data.data);
                this.recetas = data.data;
            })
        },
    }
}
</script>

<style scoped>

</style>
