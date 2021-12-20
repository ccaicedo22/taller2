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
                                    <th>Título</th>
                                    <th>Descripcion</th>
                                    <th>Slug</th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="producto in productos" :key="producto.id">
                                    <td>{{ producto.id }}</td>
                                    <td>{{ producto.title }}</td>
                                    <td>{{ producto.description }}</td>
                                    <td>{{ producto.slug }}</td>
                                    
                                   
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>                          
        </div>
    </div>
</template>

<script>
export default {
    name:"productos",
    data(){
        return {
            productos:[]
        }
    },
    mounted(){
        this.mostrarAlimentos()
    },
    methods:{
        async mostrarAlimentos(){
            await this.axios.get('/api/alimentos').then(response=>{
                this.productos = response.data
            }).catch(error=>{
                console.log(error)
                this.productos = []
            })
        }
        
    }
}
</script>