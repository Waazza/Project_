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

    if ( window.location.href === 'http://project.test' || window.location.href === 'https://www.loocateme.fr' ){ // Check current page to select which script to run

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

    } else if ( window.location.href === 'http://project.test/lost' || window.location.href === 'https://www.loocateme.fr/lost' || window.location.href === 'http://project.test/found' || window.location.href === 'https://www.loocateme.fr/found'){

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
            center: [-0.5827,44.8423],
            scrollZoom: false,
            doubleClickZoom: false,
        });

        map.on('click', function(e) {

            let pointer = e.lngLat;
            let hiddenLong = document.getElementById('hiddenLong');
            let hiddenLat = document.getElementById('hiddenLat');
            hiddenLong.value = pointer.lng;
            hiddenLat.value = pointer.lat;
            let checkDiv = document.getElementById('marker');
            let checkIcon = document.getElementById('center-marker');

            console.log(hiddenLong.value, hiddenLat.value);


            if(checkDiv !== null && checkIcon !== null){
                checkDiv.parentNode.removeChild(checkDiv);
                checkIcon.parentNode.removeChild(checkIcon);
            }

            // create DOM element for the marker
            let el = document.createElement('div');
            el.id = 'marker';
            let icon = document.createElement('img');
            icon.id = 'center-marker';
            let logo = document.createAttribute('src');
            logo.value = '/storage/locating.png';
            icon.setAttributeNode(logo);

            // create the marker
            new mapboxgl.Marker(el)
                .setLngLat(e.lngLat)
                .addTo(map);

            new mapboxgl.Marker(icon)
                .setLngLat(e.lngLat)
                .addTo(map);
        });


        // Date picker script -----------------------
        $("#datepicker").datepicker();
    } else if ( window.location.href === 'http://project.test/list' || window.location.href === 'http://project.test/list#' || window.location.href === 'https://www.loocateme.fr/list' ){

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });

        let $filter = $('#filter');
        $($filter).submit(function(e){
            e.preventDefault();

            let $age        = ($('input[name="age"]:checked').length) ? $('input[name="age"]:checked').val():-1;
            let $microship  = ($('input[name="microship"]:checked').length) ? $('input[name="microship"]:checked').val():-1;
            let $collar     = ($('input[name="collar"]:checked').length) ? $('input[name="collar"]:checked').val():-1;
            let $furSizes   = ($('input[name="fur-size"]:checked').length) ? $('input[name="fur-size"]:checked').val():-1;
            let $genders    = ($('input[name="gender"]:checked').length) ? $('input[name="gender"]:checked').val():-1;
            let $sizes      = ($('input[name="size"]:checked').length) ? $('input[name="size"]:checked').val():-1;
            let $colors     = ($('select[name="color"] option:selected:not([disabled])').length) ? $('select[name="color"] option:selected:not([disabled])') .val():-1;
            let $colorsEyes = ($('select[name="eyes-color"] option:selected:not([disabled])').length) ? $('select[name="eyes-color"] option:selected:not([disabled])') .val():-1;
            let $types      = ($('select[name="type"] option:selected:not([disabled])').length) ? $('select[name="type"] option:selected:not([disabled])').val():-1;

            // if(typeof(variable) != "undefined" && variable !== null) {


            $.ajax({
                url: "abc",
                method: "POST",
                dataType: "json",
                // data:   "age=" + $age +
                //         "&microship=" + $microship +
                //         "&collar=" + $collar +
                //         "&colors=" + $colors +
                //         "&colorsEyes=" + $colorsEyes +
                //         "&furSizes=" + $furSizes +
                //         "&genders=" + $genders +
                //         "&sizes=" + $sizes +
                //         "&types=" + $types,

                data: JSON.stringify({
                    age : $age,
                    microship : $microship,
                    collar : $collar,
                    colors : $colors,
                    colorsEyes : $colorsEyes,
                    furSizes : $furSizes,
                    genders : $genders,
                    sizes : $sizes,
                    types : $types,
                }),

            }).done(function (data){

                console.log(data);


                // TODO :: Recréer les lignes d'animaux ici dans le conteneur
            });

        });

        mapboxgl.accessToken = 'pk.eyJ1Ijoid2FhenphIiwiYSI6ImNqeHVjdjlpNzAyZGIzbW9oOGJ1d292M2sifQ.Q8IMBCsYd3VsCfxGavM3AA';
        let map = new mapboxgl.Map({
            container: 'map-view',
            style: 'mapbox://styles/waazza/cjxzueo0b0pz51cpewfnc822o',
            zoom: 16,
            center: [-0.5827,44.8423],
            scrollZoom: false,
            doubleClickZoom: false,
        });


        // Switch list/map view ---------------------------

        let listIcon = document.getElementById("list-icon");
        let mapIcon = document.getElementById("map-icon");

        let listView = document.getElementById("list-view");
        let mapView = document.getElementById("map-view");

        mapIcon.addEventListener("click", function(){
            listView.style.display = "none";
            mapView.style.display = "block";
            map.resize();
        });

        listIcon.addEventListener("click", function (){
            mapView.style.display = "none";
            listView.style.display = "block";
        });

        map.on('load', function(e) {
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

            $.ajax({
                url: "/ajaxMapList",
                type: "POST",
                dataType: "json",
            }).done(function (data){
                for (let i = 0; i < data.length; i++){
                    let loca = data[i].localisation;
                    let arrayLoca = loca.split(' ');
                    console.log(arrayLoca);

                    let el = document.createElement('div');
                    el.id = 'marker' + i;
                    el.className = 'marker';
                    let icon = document.createElement('img');
                    icon.id = 'center-marker' + i;
                    icon.className = 'center-marker';
                    let logo = document.createAttribute('src');
                    logo.value = '/storage/dog.png';
                    icon.setAttributeNode(logo);

                    new mapboxgl.Marker(el)
                        .setLngLat(arrayLoca)
                        .addTo(map);

                    new mapboxgl.Marker(icon)
                        .setLngLat(arrayLoca)
                        .addTo(map);
                }
            });
            // let pointer = e.lngLat;
            // let hiddenLong = document.getElementById('hiddenLong');
            // let hiddenLat = document.getElementById('hiddenLat');
            // hiddenLong.value = pointer.lng;
            // hiddenLat.value = pointer.lat;
            // let checkDiv = document.getElementById('marker');
            // let checkIcon = document.getElementById('center-marker');
            //
            // console.log(hiddenLong.value, hiddenLat.value);
            //
            //
            // if(checkDiv !== null && checkIcon !== null){
            //     checkDiv.parentNode.removeChild(checkDiv);
            //     checkIcon.parentNode.removeChild(checkIcon);
            // }
            //
            // // create DOM element for the marker
            // let el = document.createElement('div');
            // el.id = 'marker';
            // let icon = document.createElement('img');
            // icon.id = 'center-marker';
            // let logo = document.createAttribute('src');
            // logo.value = '/storage/locating.png';
            // icon.setAttributeNode(logo);
            //
            // // create the marker
            // new mapboxgl.Marker(el)
            //     .setLngLat(e.lngLat)
            //     .addTo(map);
            //
            // new mapboxgl.Marker(icon)
            //     .setLngLat(e.lngLat)
            //     .addTo(map);
        });



    }else if(  window.location.href === 'http://project.test/monCompte/addAnimal' || window.location.href === 'https://www.loocateme.fr' ) {

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


    }else if (window.location.href === 'http://project.test/forms/inscriptions' ){
        // Ajax selection de ville -----------------------  
        $("#zipCode").on("input", function () {
            $zipCode = $("#zipCode");
            if(zipCode.value.length ==  5) {
                $.ajaxSetup({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
                });
                $.ajax({
                    type: 'POST',
                    url: '/ajaxZipCode',
                    data: 'zipCodeCities=' + zipCode.value,
                })
                    .always(function (data) {
                        let cities = data.city;
                        for (let i = 0; i < cities.length; i++) {
                            let select = document.getElementById('selectCity');
                            let option = document.createElement('option')
                            option.classList.add('city');
                            option.setAttribute('value', cities[i].name);
                            option.text = cities[i].name;
                            select.add(option);
                        }
                    });
            } else {
                $('.city').remove();
            }
        })
    }
});