
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueSwal from 'vue-swal';
import VModal from 'vue-js-modal';
import PrettyCheck from 'pretty-checkbox-vue/check';
import PrettyRadio from 'pretty-checkbox-vue/radio';
import datePicker from 'vue-bootstrap-datetimepicker';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.use(VModal);
Vue.use(datePicker);
Vue.use(VueSwal);

// third party package components
Vue.component('p-check', PrettyCheck);
Vue.component('p-radio', PrettyRadio);
require('bootstrap-select');
require('bootstrap-datepicker');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


const app = new Vue({
    el: '#app'
});

// handle ajax axios errors
axios.interceptors.response.use(
    function(response) { return response;},
    function(error) {
        // handle error
        if (error.response) {
            swal("Something went wrong!", error.response.data.message, "error");
        }
    }
);


$(document).ready(function(){

    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();

    // force disable browser autocomplete on inputs
    $( "input:text" ).attr('autocomplete','nope-'+Math.random(0,100000000));

    $('.selectpicker').selectpicker({
        'showTick' : true,
        'tickIcon' : 'fa-check',
        'iconBase' : 'fa',
        'size': 4,
        'virtualScroll': true,
    });

    $('.datepicker').datepicker({
        format: "dd M yyyy",
        clearBtn: true,
        orientation: "bottom auto",
        todayHighlight: true
    });

    $('body').on('click', function (e) {
        $('[data-toggle=popover]').each(function () {
            // hide any open popovers when the anywhere else in the body is clicked
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                $(this).popover('hide');
            }
        });
    });

    $(".sidebar-menu a").on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation();
        document.location = e.target.href;
    })
})
