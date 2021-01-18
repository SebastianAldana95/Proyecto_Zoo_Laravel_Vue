import ListaAnimales from './components/ListaAnimales.vue';
import GuardarAnimal from './components/GuardarAnimal';
import EditarAnimal from './components/EditarAnimal';

export const routes = [
    {
        name: 'home',
        path:'/',
        component: ListaAnimales
    },
    {
        name: 'guardar',
        path: '/guardar',
        component: GuardarAnimal
    },
    {
        name: 'editar',
        path: '/editar/:id',
        component: EditarAnimal
    }
];