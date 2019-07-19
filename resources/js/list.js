$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    });

    let $filter = $('#filter');
    $($filter).submit(function (e) {
        e.preventDefault();

        let $types = ($('select[name="type"] option:selected:not([disabled])').length) ? $('select[name="type"] option:selected:not([disabled])').val() : -1;
        let $colors = ($('select[name="color"] option:selected:not([disabled])').length) ? $('select[name="color"] option:selected:not([disabled])').val() : -1;
        let $colorsEyes = ($('select[name="eyes-color"] option:selected:not([disabled])').length) ? $('select[name="eyes-color"] option:selected:not([disabled])').val() : -1;
        let $microships = ($('input[name="microship"]:checked').length) ? $('input[name="microship"]:checked').val() : -1;
        let $collars = ($('input[name="collar"]:checked').length) ? $('input[name="collar"]:checked').val() : -1;
        let $genders = ($('input[name="gender"]:checked').length) ? $('input[name="gender"]:checked').val() : -1;
        let $sizes = ($('input[name="size"]:checked').length) ? $('input[name="size"]:checked').val() : -1;
        let $furSizes = ($('input[name="fur-size"]:checked').length) ? $('input[name="fur-size"]:checked').val() : -1;
        let $ages = ($('input[name="age"]:checked').length) ? $('input[name="age"]:checked').val() : -1;

        $.ajax({
            url: "/list",
            type: "POST",
            dataType: "json",
            data: "types=" + $types +
                "&colors=" + $colors +
                "&colorsEyes=" + $colorsEyes +
                "&microships=" + $microships +
                "&collars=" + $collars +
                "&genders=" + $genders +
                "&sizes=" + $sizes +
                "&furSizes=" + $furSizes +
                "&ages=" + $ages,

        }).done(function (data) {
            $data = data;
            console.log($data);
            $('#filtered-view').empty();


            $.each($data, function (i) {
                if(data[i]['status_id_fk'] ===1){
                    $status = 'Perdu'
                }else{
                    $status = 'Trouvé'
                }

                if(data[i]['picture'] === ""){
                    $picture = "/storage/unknowDog.png"
                }

                $('#filtered-view').append('<div class="col-lg-6 col-md-12"><div class="cst-card"><div class="text-center"><a href="card/' + data[i]['id'] +'"><img class="cst-size-img" src="' + $picture +'" alt=""></a><h2>' + data[i]['name'] + '</h2></div><div class="list"><ul class="desc"><li class="desc-list">Situation : ' + $status + '</li><li class="desc-list">Animal : ' + data[i]['races_label'] + '</li><li class="desc-list">Tailles : ' + data[i]['sizes_label'] + '</li><li class="desc-list"></li></ul></div></div></div> ');
            })
        });

    });

    // Toggle Menu

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");

    });

    mapboxgl.accessToken = 'pk.eyJ1Ijoid2FhenphIiwiYSI6ImNqeHVjdjlpNzAyZGIzbW9oOGJ1d292M2sifQ.Q8IMBCsYd3VsCfxGavM3AA';
    let map = new mapboxgl.Map({
        container: 'map-view',
        style: 'mapbox://styles/waazza/cjxzueo0b0pz51cpewfnc822o',
        zoom: 16,
        center: [-0.5827, 44.8423],
        scrollZoom: false,
        doubleClickZoom: false,
    });


    // Switch list/map view ---------------------------

    let listIcon = document.getElementById("list-icon");
    let mapIcon = document.getElementById("map-icon");

    let listView = document.getElementById("list-view");
    let mapView = document.getElementById("map-view");

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
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

        $.ajax({
            url: "/ajaxMapList",
            type: "POST",
            dataType: "json",
        }).done(function (data) {
            for (let i = 0; i < data.length; i++) {
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
    });
});
