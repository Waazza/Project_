/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 4);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/list.js":
/*!******************************!*\
  !*** ./resources/js/list.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var $filter = $('#filter');
  $($filter).submit(function (e) {
    e.preventDefault();
    var $types = $('select[name="type"] option:selected:not([disabled])').length ? $('select[name="type"] option:selected:not([disabled])').val() : -1;
    var $colors = $('select[name="color"] option:selected:not([disabled])').length ? $('select[name="color"] option:selected:not([disabled])').val() : -1;
    var $colorsEyes = $('select[name="eyes-color"] option:selected:not([disabled])').length ? $('select[name="eyes-color"] option:selected:not([disabled])').val() : -1;
    var $microships = $('input[name="microship"]:checked').length ? $('input[name="microship"]:checked').val() : -1;
    var $collars = $('input[name="collar"]:checked').length ? $('input[name="collar"]:checked').val() : -1;
    var $genders = $('input[name="gender"]:checked').length ? $('input[name="gender"]:checked').val() : -1;
    var $sizes = $('input[name="size"]:checked').length ? $('input[name="size"]:checked').val() : -1;
    var $furSizes = $('input[name="fur-size"]:checked').length ? $('input[name="fur-size"]:checked').val() : -1;
    var $ages = $('input[name="age"]:checked').length ? $('input[name="age"]:checked').val() : -1;
    $.ajax({
      url: "/list",
      type: "POST",
      dataType: "json",
      data: "types=" + $types + "&colors=" + $colors + "&colorsEyes=" + $colorsEyes + "&microships=" + $microships + "&collars=" + $collars + "&genders=" + $genders + "&sizes=" + $sizes + "&furSizes=" + $furSizes + "&ages=" + $ages
    }).done(function (data) {
      $data = data;
      console.log($data);
      $('#filtered-view').empty();
      $.each($data, function (i) {
        if (data[i]['status_id_fk'] === 1) {
          $status = 'Perdu';
        } else {
          $status = 'Trouvé';
        }

        if (data[i]['picture'] === "") {
          $picture = "/storage/unknowDog.png";
        }

        $('#filtered-view').append('<div class="col-lg-6 col-md-12"><div class="cst-card"><div class="text-center"><a href="card/' + data[i]['id'] + '"><img class="cst-size-img" src="' + $picture + '" alt=""></a><h2>' + data[i]['name'] + '</h2></div><div class="list"><ul class="desc"><li class="desc-list">Situation : ' + $status + '</li><li class="desc-list">Animal : ' + data[i]['races_label'] + '</li><li class="desc-list">Tailles : ' + data[i]['sizes_label'] + '</li><li class="desc-list"></li></ul></div></div></div> ');
      });
    });
  }); // Toggle Menu

  $("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
  mapboxgl.accessToken = 'pk.eyJ1Ijoid2FhenphIiwiYSI6ImNqeHVjdjlpNzAyZGIzbW9oOGJ1d292M2sifQ.Q8IMBCsYd3VsCfxGavM3AA';
  var map = new mapboxgl.Map({
    container: 'map-view',
    style: 'mapbox://styles/waazza/cjxzueo0b0pz51cpewfnc822o',
    zoom: 16,
    center: [-0.5827, 44.8423],
    scrollZoom: false,
    doubleClickZoom: false
  }); // Switch list/map view ---------------------------

  var listIcon = document.getElementById("list-icon");
  var mapIcon = document.getElementById("map-icon");
  var listView = document.getElementById("list-view");
  var mapView = document.getElementById("map-view");
  mapIcon.addEventListener("click", function () {
    listView.style.display = "none";
    mapView.style.display = "block";
    map.resize();
  });
  listIcon.addEventListener("click", function () {
    mapView.style.display = "none";
    listView.style.display = "block";
  });
  map.on('load', function (e) {
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: "/ajaxMapList",
      type: "POST",
      dataType: "json"
    }).done(function (data) {
      for (var i = 0; i < data.length; i++) {
        var loca = data[i].localisation;
        var arrayLoca = loca.split(' ');
        console.log(arrayLoca);
        var el = document.createElement('div');
        el.id = 'marker' + i;
        el.className = 'marker';
        var icon = document.createElement('img');
        icon.id = 'center-marker' + i;
        icon.className = 'center-marker';
        var logo = document.createAttribute('src');
        logo.value = '/storage/dog.png';
        icon.setAttributeNode(logo);
        new mapboxgl.Marker(el).setLngLat(arrayLoca).addTo(map);
        new mapboxgl.Marker(icon).setLngLat(arrayLoca).addTo(map);
      }
    });
  });
});

/***/ }),

/***/ 4:
/*!************************************!*\
  !*** multi ./resources/js/list.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\Project\resources\js\list.js */"./resources/js/list.js");


/***/ })

/******/ });