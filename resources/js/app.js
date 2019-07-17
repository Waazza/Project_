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

    if ( window.location.href === 'https://www.loocateme.fr'){ // Check current page to select which script to run

        $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function() {
            let next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (let i = 0; i < 0; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });

    } else if ( window.location.href === 'https://www.loocateme.fr/forms/animals' ){

        // SSL Certificat needed ---------------------------

        let options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };

        function success(pos) {
            let crd = pos.coords;

            console.log('Your current position is:');
            console.log(`Latitude : ${crd.latitude}`);
            console.log(`Longitude: ${crd.longitude}`);
            console.log(`More or less ${crd.accuracy} meters.`);
        }

        function error(err) {
            console.warn(`ERROR(${err.code}): ${err.message}`);
        }

        navigator.geolocation.getCurrentPosition(success, error, options);

        // Script MapBox init ---------------------------
        mapboxgl.accessToken = 'pk.eyJ1Ijoid2FhenphIiwiYSI6ImNqeHVjdjlpNzAyZGIzbW9oOGJ1d292M2sifQ.Q8IMBCsYd3VsCfxGavM3AA';
        let map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/waazza/cjxzueo0b0pz51cpewfnc822o',
            zoom: 16,
            center: [crd.latitude, crd.latitude],
        });

        // Date picker script -----------------------
        $("#datepicker").datepicker();
    } else if ( window.location.href === 'https://www.loocateme.fr/list' ){

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
    }else if(  window.location.href === 'https://www.loocateme.fr/monCompte/addAnimal' ) {

        let typeCheck = document.getElementById('type');

        typeCheck.addEventListener('input', function(){
            let type = typeCheck.value;
            let dogDisplay = document.getElementById('dogRace');
            let catDisplay = document.getElementById('catRace');
            let nacDisplay = document.getElementById('nacRace');
            if (type == 1){
                dogDisplay.style.display = 'flex';
                catDisplay.style.display = 'none';
                nacDisplay.style.display = 'none';
            }else if(type == 2){
                catDisplay.style.display = 'flex';
                dogDisplay.style.display = 'none';
                nacDisplay.style.display = 'none';
            }else if(type == 3){
                nacDisplay.style.display = 'flex';
                dogDisplay.style.display = 'none';
                catDisplay.style.display = 'none';
            }
        });

        let tatooCheck = document.getElementsByName('checkTatoo');

        tatooCheck[0].addEventListener('click', function(){
            let tatooInput = document.getElementById('tatooInput');
            tatooInput.style.display = 'flex';
        });

        tatooCheck[1].addEventListener('click', function(){
            let tatooInput = document.getElementById('tatooInput');
            tatooInput.style.display = 'none';
        });


    }
});
