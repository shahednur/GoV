
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
 window.Vue = require('vue');
 window.Slug = require('slug');
 Slug.defaults.mode = "rfc3986";
 Vue.config.devtools = true;
 import Vue from 'vue';
 import Buefy from 'buefy';
 import 'buefy/lib/buefy.css';


 Vue.use(Buefy);

// Vue.component(Buefy.Checkbox.name, Buefy.Checkbox);
// Vue.component(Buefy.Table.name, Buefy.Table);
// Vue.component(Buefy.Switch.name, Buefy.Switch);
require('./manage');

Vue.component('slugWidget', require('./components/slugWidget.vue'));
var app = new Vue({
el: '#app',
data:{}
});
