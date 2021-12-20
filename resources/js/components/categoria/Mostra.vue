<template>
    <div class="row">
        <div class="col-12 mb-2">
            <!-- llamamos al componente para Crear   -->
            
        </div>
        <div class="col-12">             
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Descripcion</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="categoria in categorias" :key="categoria.id">
                                    <td>{{ categoria.id }}</td>
                                    <td>{{ categoria.descripcion }}</td>
                                    
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>                          
        </div>
    </div>
</template>

<script>
export default {
    name:"categorias",
    data(){
        return {
            categorias:[]
        }
    },
    mounted(){
        this.mostrarCategorias()
    },
    methods:{
        async mostrarCategorias(){
            await this.axios.get('/api/categoria').then(response=>{
                this.categorias = response.data
            }).catch(error=>{
                console.log(error)
                this.categorias = []
            })
        },
        borrarCategoria(id){
            if(confirm("¿Confirma eliminar el registro?")){
                this.axios.delete(`/api/categoria/${id}`).then(response=>{
                    this.mostrarCategorias()
                }).catch(error=>{
                    console.log(error)
                })
            }
        }
    }
}
</script>