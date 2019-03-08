<template>
	<div class="container">
	    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Usuario</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Info</h6>
                    <p class="card-text">Atualmente cadastrado <span class="badge badge-pill badge-info"> {{ data.usuarios }} </span> usuarios!    </p>
                  </div>
                </div>
                <!-- /.col -->
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">Instituição</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Info</h6>
                    <p class="card-text">Atualmente cadastrado <span class="badge badge-pill badge-info">{{ data.instituicoes }} </span> Instituições!    </p>
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
                data: {
                    instituicoes: 0,
                    usuarios: 0,
                },

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
                axios.get('/api/admin/getdados')
                    .then(response => {
                        console.log(response.data);
                            this.data = response.data;
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