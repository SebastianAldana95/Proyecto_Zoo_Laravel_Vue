<template>
    <div>
        <h3 class="text-center">Editar Animal</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="actualizarAnimal">
                    <div class="form-group">
                        <label>Especie</label>
                        <input type="number" class="form-control" v-model="animal.especie_id">
                    </div>
                    <div class="form-group">
                        <label>Sexo</label>
                        <input type="text" class="form-control" v-model="animal.sexo">
                    </div>
                    <div class="form-group">
                        <label>Año de Nacimiento</label>
                        <input type="number" class="form-control" v-model="animal.ano_nac">
                    </div>
                    <div class="form-group">
                        <label>Pais de Origen</label>
                        <input type="text" class="form-control" v-model="animal.pais">
                    </div>
                    <div class="form-group">
                        <label>Continente</label>
                        <input type="text" class="form-control" v-model="animal.continente">
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar Animal</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                animal: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/animal/editar/${this.$route.params.id}`)
                .then((response) => {
                    this.animal = response.data;
                    // console.log(response.data);
                });
        },
        methods: {
            actualizarAnimal() {
                this.axios
                    .post(`http://localhost:8000/api/animal/actualizar/${this.$route.params.id}`, this.animal)
                    .then((response) => {
                        this.$router.push({name: 'home'});
                    });
            }
        }
    }
</script>