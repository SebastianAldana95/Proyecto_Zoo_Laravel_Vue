<template>
    <div>
        <h3 class="text-center">Todos los animales</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>especie id</th>
                <th>Sexo</th>
                <th>Año de Nacimiento</th>
                <th>Pais</th>
                <th>Continente</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="animal in animales" :key="animal.id">
                <td>{{ animal.id }}</td>
                <td>{{ animal.especie_id }}</td>
                <td>{{ animal.sexo }}</td>
                <td>{{ animal.ano_nac }}</td>
                <td>{{ animal.pais }}</td>
                <td>{{ animal.continente }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'editar', params: { id: animal.id }}" class="btn btn-primary">Editar
                        </router-link>
                        <button class="btn btn-danger" @click="deleteAnimal(animal.id)">Eliminar</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                animales: []
            }
        },
        created() {
            this.axios
                .get('http://localhost:8000/api/animales')
                .then(response => {
                    this.animales = response.data;
                });
        },
        methods: {
            deleteAnimal(id) {
                this.axios
                    .delete(`http://localhost:8000/api/animal/eliminar/${id}`)
                    .then(response => {
                        let i = this.animales.map(item => item.id).indexOf(id); // find index of your object
                        this.animales.splice(i, 1)
                    });
            }
        }
    }
</script>