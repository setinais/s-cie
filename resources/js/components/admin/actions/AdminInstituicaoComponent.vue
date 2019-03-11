<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Gerenciar Instituições</div>

                   
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nome</th>
                              <th scope="col">E-mail</th>
                              <th scope="col">Telefone</th>
                              <th scope="col">Cidade</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="(instituicao, index) in instituicoes">
                              <th scope="row">{{ (index + 1) }}</th>
                              <td>{{ instituicao.name }}</td>
                              <td>{{ instituicao.email }}</td>
                              <td>{{ instituicao.phone }}</td>
                              <td>{{ instituicao.city }}</td>
                            </tr>
                          </tbody>
                        </table>
                    </div>
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
                instituicoes: {
                    id: '',
                    name: '',
                    email: '',
                    phone: '',
                    city: '',
                    
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
                axios.get('/api/admin/getinstituicao')
                    .then(response => {
                            this.instituicoes = response.data;
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