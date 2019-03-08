<template>
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	            <div class="card">
	                <div class="card-header">Gerenciar Usuarios</div>

	               
	                    <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nome</th>
                              <th scope="col">E-mail</th>
                              <th scope="col">Status</th>
                              <th scope="col">Tipo</th>
                              <th scope="col">Desde</th>
                              <th scope="col">Ação</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="(usuario, index) in usuarios">
                              <th scope="row">{{ (index + 1) }}</th>
                              <td>{{ usuario.name }}</td>
                              <td>{{ usuario.email }}</td>
                              <td><span v-bind:class="usuario.status === 1 ? 'badge badge-pill badge-success' : 'badge badge-pill badge-danger'">{{ usuario.status === 1 ? 'Ativo' : 'Bloqueado' }}</span></td>
                              <td>{{ usuario.role }}</td>
                              <td>{{ usuario.created_at }}</td>
                              <td><a href="#" v-on:click="update(usuario.id)" class="badge" v-bind:class="usuario.status === 0 ? 'badge-success' : 'badge-danger'">{{ usuario.status === 0 ? 'Liberar' : 'Bloquear' }}</a></td>
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
                usuarios: {
                    id: '',
                    name: '',
                    email: '',
                    email_verified_at: '',
                    status: '',
                    role: '',
                    created_at: '',
                    updated_at: '',
                    deleted_at: ''
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
                axios.get('/api/admin/getusers')
                    .then(response => {
                            this.usuarios = response.data;
                        })
                    .catch(error => {
                        if (typeof error.response.data === 'object') {
                            form.errors = _.flatten(_.toArray(error.response.data.errors));
                        } else {
                            form.errors = ['Something went wrong. Please try again.'];
                        }
                    });
            },
            update(id){
                axios.put('/api/admin/lbuser/'+ id)
                    .then(response => {
                            this.prepareComponent();
                        })
                    .catch(error => {
                        if (typeof error.response.data === 'object') {
                            form.errors = _.flatten(_.toArray(error.response.data.errors));
                        } else {
                            form.errors = ['Something went wrong. Please try again.'];
                        }
                    });
            }
        }
    }
</script>