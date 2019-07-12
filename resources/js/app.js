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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

$(function() {

    if ( window.location.href === 'http://project.test:8080'){ // Check current page to select which script to run

    } else if ( window.location.href === 'http://project.test:8080/forms/animals' ){

        // Script MapBox init ---------------------------
        mapboxgl.accessToken = 'pk.eyJ1Ijoid2FhenphIiwiYSI6ImNqeHVjdjlpNzAyZGIzbW9oOGJ1d292M2sifQ.Q8IMBCsYd3VsCfxGavM3AA';
        let map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/waazza/cjxzueo0b0pz51cpewfnc822o',
            zoom: 16,
            center: [-0.5827,44.8423],
        });


        // SSL Certificat needed ---------------------------

        // let options = {
        //     enableHighAccuracy: true,
        //     timeout: 5000,
        //     maximumAge: 0
        // };



        // function success(pos) {
        //     let crd = pos.coords;
        //
        //     console.log('Your current position is:');
        //     console.log(`Latitude : ${crd.latitude}`);
        //     console.log(`Longitude: ${crd.longitude}`);
        //     console.log(`More or less ${crd.accuracy} meters.`);
        // }
        //
        // function error(err) {
        //     console.warn(`ERROR(${err.code}): ${err.message}`);
        // }
        //
        // navigator.geolocation.getCurrentPosition(success, error, options);


        // Date picker script -----------------------
        $("#datepicker").datepicker();
    } else if ( window.location.href === 'http://project.test:8080/list' ||  window.location.href === 'http://project.test:8080/list#' ){

        // Switch list/map view ---------------------------

        let listIcon = document.getElementById("list-icon");
        let mapIcon = document.getElementById("map-icon");

        let listView = document.getElementById("list-view");
        let mapView = document.getElementById("map-view");

        mapIcon.addEventListener("click", showMap);
        function showMap(){
            mapView.style.display = "block";
            listView.style.display = "none";
        }

        listIcon.addEventListener("click", showList);
        function showList(){
            mapView.style.display = "none";
            listView.style.display = "block";
        }
    }
});
