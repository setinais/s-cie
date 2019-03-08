<template>
	<div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-lg-2">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link" v-on:click="swap('home')" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                          <a class="nav-link" v-on:click="swap('usuario')" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Usuario</a>
                          <a class="nav-link" v-on:click="swap('instituicao')" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Instituições</a>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
                          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                        </div>
                    </div>
                    <div class="col-md-9 col-lg-10">
                      <home v-if="active === 'home'"></home>
                      <usuario v-if="active === 'usuario'"></usuario>
                      <instituicao v-if="active === 'instituicao'"></instituicao>
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
                active: 'home',
            };
        },

        /**
         * Prepare the component (Vue 1.x).
         */
        ready() {
            //this.prepareComponent();
        },

        /**
         * Prepare the component (Vue 2.x).
         */
        mounted() {
            //this.prepareComponent();
        },

        methods: {
            /**
             * Prepare the component.
             */
          
            swap(valor){
              this.active = valor
            }
        }
    }
</script>