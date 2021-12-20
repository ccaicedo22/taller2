const Home = () => import('./components/Home.vue')

//importamos los componentes para el producto
const Mostrar = () => import('./components/producto/Mostrar.vue')
const Crear = () => import('./components/producto/Crear.vue')
const Editar = () => import('./components/producto/Editar.vue')

const Mostra = () => import('./components/categoria/Mostra.vue')
const Alimentos = () => import('./components/categoria/Alimentos.vue')
const Juguetes = () => import('./components/categoria/Juguetes.vue')

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'mostrarProductos',
        path: '/productos',
        component: Mostrar
    },
    {
        name: 'crearProducto',
        path: '/crear',
        component: Crear
    },
    {
        name: 'editarProducto',
        path: '/editar/:id',
        component: Editar
    },

    {
        name: 'mostrarCategorias',
        path: '/categorias',
        component: Mostra
    },
    {
        name: 'mostrarAlimentos',
        path: '/Alimentos',
        component: Alimentos
    },
    {
        name: 'mostrarJuguetes',
        path: '/Juguetes',
        component: Juguetes
    }
     
]