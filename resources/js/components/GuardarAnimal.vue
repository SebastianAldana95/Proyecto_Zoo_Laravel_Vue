<template>
    <div>
        <h3 class="text-center">Guardar Animal</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="guardarAnimal">

                    <div class="form-group">
                        <label for="especie">Especie</label>
                        <input type="number" class="form-control" v-model="animal.especie_id" required>
                    </div>

                    <div class="form-group">
                        <label>Sexo</label>
                        <select class="form-control" v-model="animal.sexo" required>
                            <option disabled value="null">Seleccione Sexo del Animal</option>
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                        <!--<input type="text" class="form-control" v-model="animal.sexo">-->
                    </div>
                    <div class="form-group">
                        <label>Año de Nacimiento</label>
                        <input type="number" minlength="4" class="form-control" v-model="animal.ano_nac" required>
                    </div>
                    <div class="form-group">
                        <label>Pais de Origen</label>
                        <input type="text" class="form-control" v-model="animal.pais" required>
                    </div>
                    <div class="form-group">
                        <label>Continente</label>
                        <input type="text" class="form-control" v-model="animal.continente" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Agregar Animal</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                animal: {},
                especieSeleccionado: {},
                especies: {}
            }
        },
        methods: {
            guardarAnimal() {

                this.axios
                    .post('http://localhost:8000/api/animal/guardar', this.animal)
                    .then(response => (
                        this.$router.push({name: 'home'}),
                        console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            },
            listarEspecies() {
                this.axios
                    .get('http://localhost:8000/api/especies', this.especies)
                    .then(response => (
                        this.$router.push({name: 'home'}),
                        console.log(response.data)
                    ))
                    .catch(error => console.log(error))
                    .finally(() => this.loading = false)
            }
        }
    }
</script>