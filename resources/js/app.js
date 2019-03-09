
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
	//Admin
	Vue.component('menu-lateral', require('./components/admin/MenuLateralComponent.vue').default);
		Vue.component('home', require('./components/admin/actions/AdminHomeComponent.vue').default);
		Vue.component('instituicao', require('./components/admin/actions/AdminInstituicaoComponent.vue').default);
		Vue.component('usuario', require('./components/admin/actions/AdminUserComponent.vue').default);

	//Entitie
	Vue.component('menu-lateral-entitie', require('./components/entitie/MenuLateralEntitieComponent.vue').default);
		Vue.component('entitiehome', require('./components/entitie/actions/EntitieHomeComponent.vue').default);
		Vue.component('entitiealuno', require('./components/entitie/actions/EntitieAlunoComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
