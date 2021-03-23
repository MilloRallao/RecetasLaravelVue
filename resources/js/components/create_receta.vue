<template>
    <el-button class="float-right" type="success" icon="el-icon-circle-plus" @click="dialogVisible = true">
        Crear Receta
    </el-button>

    <el-dialog
        title="NUEVA RECETA"
        v-model="dialogVisible"
        width="30%"
        center
        :before-close="handleClose">

        <el-form ref="form" :model="form" label-width="150px">
            <el-form-item label="Nombre de la receta">
                <el-input v-model="form.nombre" placeholder="Nombre de la receta" clearable style="width: 50%"></el-input>
            </el-form-item>
            <el-form-item label="Categoría">
                <el-select v-model="form.categoria" placeholder="Selecciona una categoría">
                    <el-option v-for="categoria in categorias" :label="categoria.nombre_categoria"
                               :value="categoria.id"></el-option>
                </el-select>
            </el-form-item>

            <el-form-item label="Ingredientes">
                <el-select
                    v-model="form.ingredientes"
                    multiple
                    filterable
                    placeholder="Busca ingredientes"
                    :loading="loading"
                    autocomplete="on">
                    <el-option
                        v-for="item in ingredientes"
                        :key="item.id"
                        :label="item.nombre_ingrediente"
                        :value="item.id">
                    </el-option>
                </el-select>
            </el-form-item>

            <el-form-item style="padding-top: 10px;">
                <el-button @click="postDataCreateReceta(); dialogVisible = false" type="primary">Confirmar</el-button>
                <el-button @click="dialogVisible = false" type="danger">Cancelar</el-button>
            </el-form-item>
        </el-form>

    </el-dialog>

</template>

<script>
export default {
    name: "create_receta",
    data() {
        return {
            form: {
                nombre: "",
                categoria: "",
                ingredientes: [],
            },
            dialogVisible: false,
            loading: false,
            ingredientes: [],
            categorias: []
        };
    },
    created() {
        this.getDataCategorias();
        this.getDataIngredientes();
    },
    methods: {
        getDataCategorias() {
            axios.get('/getDataCategorias').then(data => {
                console.log(data.data);
                this.categorias = data.data;
            })
        },
        getDataIngredientes() {
            axios.get('/getDataIngredientes').then(data => {
                console.log(data.data);
                this.ingredientes = data.data;
            })
        },
        postDataCreateReceta() {
            axios.post('/postDataCreateReceta', {
                receta: this.form,
            }).then(response => {
                console.log(response.data);
                this.$emit('addReceta');
            }).catch(error => {
                console.log(error.response)
            });
        },
        handleClose(done) {
            this.$confirm('¿Quieres cerrar esta ventana?')
                .then(_ => {
                    done();
                })
                .catch(_ => {
                });
        }
    }
}
</script>

<style scoped>

</style>
