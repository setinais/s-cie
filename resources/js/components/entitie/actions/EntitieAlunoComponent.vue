<template>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">Gerenciar Alunos <a href="/s-cie/public/entitie/cadastraraluno" class="float-right btn btn-success">+ Novo Aluno</a> </div>


          <table class="table table-striped">
            <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Matricula</th>
              <th scope="col">Curso</th>
              <th scope="col">Sexo</th>
              <th scope="col">Status</th>
              <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="(aluno, index) in alunos">
              <th scope="row">{{ (index + 1) }}</th>
              <td>{{ aluno.name }}</td>
              <td>{{ aluno.email }}</td>
              <td>{{ aluno.matricula }}</td>
              <td>{{ aluno.curso }}</td>
              <td>{{ aluno.sexo }}</td>
                <!-- Colocar cores para os status -->
              <td>{{ aluno.status }}</td>
              <td><!-- Dropdown menu --></td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    /*
     * The component's data.
     */
    data() {
      return {
        alunos: {
          id: '',
          name: '',
          email: '',
          status: '',
          sexo: '',
          matricula: '',
          curso: '',
          instituicao: '',
        }
      };
    },

    /**
     * Prepare the component (Vue 1.x).
     */
    ready() {
      this.prepareComponent();
    },

    /**
     * Prepare the component (Vue 2.x).
     */
    mounted() {
      this.prepareComponent();
    },

    methods: {
      /**
       * Prepare the component.
       */
      prepareComponent(){
        axios.get('/api/entitie/getalunos')
                .then(response => {
                  console.log(response.data);
                  this.alunos = response.data;
                })
                .catch(error => {
                  if (typeof error.response.data === 'object') {
                    form.errors = _.flatten(_.toArray(error.response.data.errors));
                  } else {
                    form.errors = ['Something went wrong. Please try again.'];
                  }
                });
      },

    }
  }
</script>