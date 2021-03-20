<template>
    <div class="col-lg-8 col-md-6 mb-4">
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
                <h4 class="card-title">Nombre de la receta</h4>
                <p class="card-text">Descripción de la receta.</p>
                <ul class="list-group list-group-flush text-left">
                    <li class="list-group-item">Ingrediente 1</li>
                    <li class="list-group-item">Ingrediente 2</li>
                    <li class="list-group-item">Ingrediente 3</li>
                </ul>
            </div>
            <div class="card-footer">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <button type="button" class="btn btn-primary float-left">EDITAR RECETA</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger float-right">BORRAR RECETA</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "welcome"
}
</script>

<style scoped>

</style>
