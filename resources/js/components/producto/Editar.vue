<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Producto</h4></div>
                <div class="card-body">
                    <form @submit.prevent="actualizar">
                         <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Título</label>
                                    <input type="text" class="form-control" v-model="producto.title">
                                </div>
                            </div>
                            <div class="col-12 mb-2">

                                <div class="form-floating">
                                <textarea class="form-control" id="floatingTextarea2" v-model="producto.description"> style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Descripcion</label>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea3" v-model="producto.categoria_id" style="height: 100px"></textarea>
                                    <label for="floatingTextarea3">Categoria</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>                          
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"editar-producto",
    data(){
        return {
            producto:{
                title:"", 
                description:"",
                categoria_id:""
            }
           
        }
    },
    mounted(){
        this.mostrarProducto()
       },
    methods:{
        async mostrarProducto(){
            await this.axios.get(`/api/producto/${this.$route.params.id}`)
            .then(response=>{
                const { title, description,categoria_id  } = response.data
                this.producto.title = title,
                this.producto.description = description
                this.producto.categoria_id = categoria_id
            }).catch(error=>{
                 console.log(error)
            })
        },

        async actualizar(){
            await this.axios.put(`/api/producto/${this.$route.params.id}`,this.producto)
            .then(response=>{
                this.$router.push({name:"mostrarProductos"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>