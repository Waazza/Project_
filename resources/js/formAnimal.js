$(function () {
    // SSL Certificat needed ---------------------------
    let options = {
        enableHighAccuracy: true,
        timeout: 5000,
        maximumAge: 0,
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
    // Date picker script -----------------------
    $("#datepicker").datepicker();
    // Display block add caracteristique button
    let btn = document.getElementById('menuCaracteristique');
    btn.addEventListener('click', function () {
        let hide = document.getElementById('hidden');
        if (hide.style.display === 'none') {
            hide.style.display = 'flex';
        } else {
            hide.style.display = 'none';
        }
    });
    // Race choice on type
    let typeCheck = document.getElementById('type');
    typeCheck.addEventListener('input', function () {
        let type = typeCheck.value;
        let dogDisplay = document.getElementById('dogRace');
        let catDisplay = document.getElementById('catRace');
        let nacDisplay = document.getElementById('nacRace');
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
    });
    // Add input caracteristique on click
    let addEyes = document.getElementById('addEyes');
    let addFur = document.getElementById('addFur');
    let addSize = document.getElementById('addSize');
    let addRace = document.getElementById('addRace');
    let addCollar = document.getElementById('addCollar');
    let addTatoo = document.getElementById('addTatoo');
    let addMicroship = document.getElementById('addMicroship');

    let lessEyes = document.getElementById('lessEyes');
    let lessFur = document.getElementById('lessFur');
    let lessSize = document.getElementById('lessSize');
    let lessRace = document.getElementById('lessRace');
    let lessCollar = document.getElementById('lessCollar');
    let lessTatoo = document.getElementById('lessTatoo');
    let lessMicroship = document.getElementById('lessMicroship');

    addRace.addEventListener('click', function () {
        let animal = document.getElementById('raceChoice');
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
        let eyes = document.getElementById('eyes');
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
        let fur = document.getElementById('fur');
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
        let size = document.getElementById('size');
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
        let collar = document.getElementById('collar');
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
        let tatoo = document.getElementById('tatoo');
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
        let microship = document.getElementById('microship');
        if (microship.style.display === 'none') {
            microship.style.display = 'flex';
            addMicroship.style.display = 'none';
            lessMicroship.style.display = 'flex';
        } else {
            microship.style.display = 'none';
            addMicroship.style.display = 'flex';
            lessMicroship.style.display = 'none';
        }
    });
    // Less input caracteristique on click
    lessRace.addEventListener('click', function () {

        let animal = document.getElementById('raceChoice');
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
        let eyes = document.getElementById('eyes');
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
        let fur = document.getElementById('fur');
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
        let size = document.getElementById('size');
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
        let collar = document.getElementById('collar');
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
        let tatoo = document.getElementById('tatoo');
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
        let microship = document.getElementById('microship');
        if (microship.style.display === 'flex') {
            microship.style.display = 'none';
            addMicroship.style.display = 'flex';
            lessMicroship.style.display = 'none';
        } else {
            microship.style.display = 'flex';
            addMicroship.style.display = 'none';
            lessMicroship.style.display = 'flex';
        }
    });
    // Find a refuge
    let refuge = document.getElementById('refugeBtn');
    if (refuge !== null) {
        refuge.addEventListener('click', function () {
            let mapRefuge = document.getElementById('mapRefuge');
            if (mapRefuge.style.display === 'none') {
                mapRefuge.style.display = 'block';
            } else {
                mapRefuge.style.display = 'none';
            }
        });
    }

    // Script MapBox init ---------------------------
    mapboxgl.accessToken = 'pk.eyJ1Ijoid2FhenphIiwiYSI6ImNqeHVjdjlpNzAyZGIzbW9oOGJ1d292M2sifQ.Q8IMBCsYd3VsCfxGavM3AA';
    let map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/waazza/cjxzueo0b0pz51cpewfnc822o',
        zoom: 16,
        center: [-0.5827, 44.8423],
        scrollZoom: false,
        doubleClickZoom: false,
    });
    map.on('click', function (e) {
        let pointer = e.lngLat;
        let hiddenLong = document.getElementById('hiddenLong');
        let hiddenLat = document.getElementById('hiddenLat');
        hiddenLong.value = pointer.lng;
        hiddenLat.value = pointer.lat;
        let checkDiv = document.getElementById('marker');
        let checkIcon = document.getElementById('center-marker');

        console.log(hiddenLong.value, hiddenLat.value);

        if (checkDiv !== null && checkIcon !== null) {
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
});




