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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/formAnimal.js":
/*!************************************!*\
  !*** ./resources/js/formAnimal.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  // SSL Certificat needed ---------------------------
  var options = {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  };

  function success(pos) {
    var crd = pos.coords;
    console.log('Your current position is:');
    console.log("Latitude : ".concat(crd.latitude));
    console.log("Longitude: ".concat(crd.longitude));
    console.log("More or less ".concat(crd.accuracy, " meters."));
  }

  function error(err) {
    console.warn("ERROR(".concat(err.code, "): ").concat(err.message));
  }

  navigator.geolocation.getCurrentPosition(success, error, options); // Date picker script -----------------------

  $("#datepicker").datepicker(); // Display block add caracteristique button

  var btn = document.getElementById('menuCaracteristique');
  btn.addEventListener('click', function () {
    var hide = document.getElementById('hidden');

    if (hide.style.display === 'none') {
      hide.style.display = 'flex';
    } else {
      hide.style.display = 'none';
    }
  }); // Race choice on type

  var typeCheck = document.getElementById('type');
  typeCheck.addEventListener('input', function () {
    var type = typeCheck.value;
    var dogDisplay = document.getElementById('dogRace');
    var catDisplay = document.getElementById('catRace');
    var nacDisplay = document.getElementById('nacRace');

    if (type == 1) {
      dogDisplay.style.display = 'flex';
      catDisplay.style.display = 'none';
      nacDisplay.style.display = 'none';
    } else if (type == 2) {
      catDisplay.style.display = 'flex';
      dogDisplay.style.display = 'none';
      nacDisplay.style.display = 'none';
    } else if (type == 3) {
      nacDisplay.style.display = 'flex';
      dogDisplay.style.display = 'none';
      catDisplay.style.display = 'none';
    }
  }); // Add input caracteristique on click

  var addEyes = document.getElementById('addEyes');
  var addFur = document.getElementById('addFur');
  var addSize = document.getElementById('addSize');
  var addRace = document.getElementById('addRace');
  var addCollar = document.getElementById('addCollar');
  var addTatoo = document.getElementById('addTatoo');
  var addMicroship = document.getElementById('addMicroship');
  var lessEyes = document.getElementById('lessEyes');
  var lessFur = document.getElementById('lessFur');
  var lessSize = document.getElementById('lessSize');
  var lessRace = document.getElementById('lessRace');
  var lessCollar = document.getElementById('lessCollar');
  var lessTatoo = document.getElementById('lessTatoo');
  var lessMicroship = document.getElementById('lessMicroship');
  addRace.addEventListener('click', function () {
    var animal = document.getElementById('raceChoice');

    if (animal.style.display === 'none') {
      animal.style.display = 'flex';
      addRace.style.display = 'none';
      lessRace.style.display = 'flex';
    } else {
      animal.style.display = 'none';
      addRace.style.display = 'flex';
      lessRace.style.display = 'none';
    }
  });
  addEyes.addEventListener('click', function () {
    var eyes = document.getElementById('eyes');

    if (eyes.style.display === 'none') {
      eyes.style.display = 'flex';
      addEyes.style.display = 'none';
      lessEyes.style.display = 'flex';
    } else {
      eyes.style.display = 'none';
      addEyes.style.display = 'flex';
      lessEyes.style.display = 'none';
    }
  });
  addFur.addEventListener('click', function () {
    var fur = document.getElementById('fur');

    if (fur.style.display === 'none') {
      fur.style.display = 'flex';
      addFur.style.display = 'none';
      lessFur.style.display = 'flex';
    } else {
      fur.style.display = 'none';
      addFur.style.display = 'flex';
      lessFur.style.display = 'none';
    }
  });
  addSize.addEventListener('click', function () {
    var size = document.getElementById('size');

    if (size.style.display === 'none') {
      size.style.display = 'flex';
      addSize.style.display = 'none';
      lessSize.style.display = 'flex';
    } else {
      size.style.display = 'none';
      addSize.style.display = 'flex';
      lessSize.style.display = 'none';
    }
  });
  addCollar.addEventListener('click', function () {
    var collar = document.getElementById('collar');

    if (collar.style.display === 'none') {
      collar.style.display = 'flex';
      addCollar.style.display = 'none';
      lessCollar.style.display = 'flex';
    } else {
      collar.style.display = 'none';
      addCollar.style.display = 'flex';
      lessCollar.style.display = 'none';
    }
  });
  addTatoo.addEventListener('click', function () {
    var tatoo = document.getElementById('tatoo');

    if (tatoo.style.display === 'none') {
      tatoo.style.display = 'flex';
      addTatoo.style.display = 'none';
      lessTatoo.style.display = 'flex';
    } else {
      tatoo.style.display = 'none';
      addTatoo.style.display = 'flex';
      lessTatoo.style.display = 'none';
    }
  });
  addMicroship.addEventListener('click', function () {
    var microship = document.getElementById('microship');

    if (microship.style.display === 'none') {
      microship.style.display = 'flex';
      addMicroship.style.display = 'none';
      lessMicroship.style.display = 'flex';
    } else {
      microship.style.display = 'none';
      addMicroship.style.display = 'flex';
      lessMicroship.style.display = 'none';
    }
  }); // Less input caracteristique on click

  lessRace.addEventListener('click', function () {
    var animal = document.getElementById('raceChoice');

    if (animal.style.display === 'flex') {
      animal.style.display = 'none';
      addRace.style.display = 'flex';
      lessRace.style.display = 'none';
    } else {
      animal.style.display = 'flex';
      addRace.style.display = 'none';
      lessRace.style.display = 'flex';
    }
  });
  lessEyes.addEventListener('click', function () {
    var eyes = document.getElementById('eyes');

    if (eyes.style.display === 'flex') {
      eyes.style.display = 'none';
      addEyes.style.display = 'flex';
      lessEyes.style.display = 'none';
    } else {
      eyes.style.display = 'flex';
      addEyes.style.display = 'none';
      lessEyes.style.display = 'flex';
    }
  });
  lessFur.addEventListener('click', function () {
    var fur = document.getElementById('fur');

    if (fur.style.display === 'flex') {
      fur.style.display = 'none';
      addFur.style.display = 'flex';
      lessFur.style.display = 'none';
    } else {
      fur.style.display = 'flex';
      addRace.style.display = 'none';
      lessRace.style.display = 'flex';
    }
  });
  lessSize.addEventListener('click', function () {
    var size = document.getElementById('size');

    if (size.style.display === 'flex') {
      size.style.display = 'none';
      addSize.style.display = 'flex';
      lessSize.style.display = 'none';
    } else {
      size.style.display = 'flex';
      addSize.style.display = 'none';
      lessSize.style.display = 'flex';
    }
  });
  lessCollar.addEventListener('click', function () {
    var collar = document.getElementById('collar');

    if (collar.style.display === 'flex') {
      collar.style.display = 'none';
      addCollar.style.display = 'flex';
      lessCollar.style.display = 'none';
    } else {
      collar.style.display = 'flex';
      addCollar.style.display = 'none';
      lessCollar.style.display = 'flex';
    }
  });
  lessTatoo.addEventListener('click', function () {
    var tatoo = document.getElementById('tatoo');

    if (tatoo.style.display === 'flex') {
      tatoo.style.display = 'none';
      addTatoo.style.display = 'none';
      lessTatoo.style.display = 'flex';
    } else {
      tatoo.style.display = 'flex';
      addTatoo.style.display = 'none';
      lessTatoo.style.display = 'flex';
    }
  });
  lessMicroship.addEventListener('click', function () {
    var microship = document.getElementById('microship');

    if (microship.style.display === 'flex') {
      microship.style.display = 'none';
      addMicroship.style.display = 'flex';
      lessMicroship.style.display = 'none';
    } else {
      microship.style.display = 'flex';
      addMicroship.style.display = 'none';
      lessMicroship.style.display = 'flex';
    }
  }); // Find a refuge

  var refuge = document.getElementById('refugeBtn');

  if (refuge !== null) {
    refuge.addEventListener('click', function () {
      var mapRefuge = document.getElementById('mapRefuge');

      if (mapRefuge.style.display === 'none') {
        mapRefuge.style.display = 'block';
      } else {
        mapRefuge.style.display = 'none';
      }
    });
  } // Script MapBox init ---------------------------


  mapboxgl.accessToken = 'pk.eyJ1Ijoid2FhenphIiwiYSI6ImNqeHVjdjlpNzAyZGIzbW9oOGJ1d292M2sifQ.Q8IMBCsYd3VsCfxGavM3AA';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/waazza/cjxzueo0b0pz51cpewfnc822o',
    zoom: 16,
    center: [-0.5827, 44.8423],
    scrollZoom: false,
    doubleClickZoom: false
  });
  map.on('click', function (e) {
    var pointer = e.lngLat;
    var hiddenLong = document.getElementById('hiddenLong');
    var hiddenLat = document.getElementById('hiddenLat');
    hiddenLong.value = pointer.lng;
    hiddenLat.value = pointer.lat;
    var checkDiv = document.getElementById('marker');
    var checkIcon = document.getElementById('center-marker');
    console.log(hiddenLong.value, hiddenLat.value);

    if (checkDiv !== null && checkIcon !== null) {
      checkDiv.parentNode.removeChild(checkDiv);
      checkIcon.parentNode.removeChild(checkIcon);
    } // create DOM element for the marker


    var el = document.createElement('div');
    el.id = 'marker';
    var icon = document.createElement('img');
    icon.id = 'center-marker';
    var logo = document.createAttribute('src');
    logo.value = '/storage/locating.png';
    icon.setAttributeNode(logo); // create the marker

    new mapboxgl.Marker(el).setLngLat(e.lngLat).addTo(map);
    new mapboxgl.Marker(icon).setLngLat(e.lngLat).addTo(map);
  });
});

/***/ }),

/***/ 2:
/*!******************************************!*\
  !*** multi ./resources/js/formAnimal.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\laragon\www\Project\resources\js\formAnimal.js */"./resources/js/formAnimal.js");


/***/ })

/******/ });