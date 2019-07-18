@extends('layouts.master')
@section('content')
   {{--     {{ dd($animals) }}--}}
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 sidebar">
                <div class="cst-toggle-sidebar"><i class="fas fa-scrubber"></i></div>
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <form class="cst-filter" action="{{ route('search') }}" method="GET" id="abc">
                                {{csrf_field()}}
                            <a class="nav-link">
                                <i class='fas fa-search search-icon'></i><input name="search" type="search" class="cst-filter" placeholder="Recherchez...">
                            </a>
                            </form>
                        </li>
                        <form class="cst-filter" action="{{ route('filter') }}" method="POST" id="filter">
                            {{csrf_field()}}
                            <li class="nav-item">
                                <a class="nav-link">
                                    <select name="type" class="cst-filter">
                                        <option value="" selected disabled>Quel type d'animal recherchez-vous ?</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->label }}</option>
                                        @endforeach
                                    </select>
                                </a>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="cst-filter form-check form-check-inline">
                                    <label class="form-check-label sidebar-label">Pucé</label>
                                    <input class="form-check-input" name="microship" type="radio" value="0">

                                    <label class="form-check-label sidebar-label">Non Pucé</label>
                                    <input class="form-check-input" name="microship" type="radio" value="1">
                                </div>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="cst-filter form-check form-check-inline">
                                    <label class="form-check-label sidebar-label">Collier</label>
                                    <input class="form-check-input" name="collar" type="radio" value="0">

                                    <label class="form-check-label sidebar-label">Sans Collier</label>
                                    <input class="form-check-input" name="collar" type="radio" value="1">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <select name="color" class="cst-filter">
                                        <option value="" selected disabled>Sélectionner une couleur de poil ?</option>
                                        @foreach($colors as $color)
                                            <option value="{{ $color->id }}">{{ $color->label }}</option>
                                        @endforeach
                                    </select>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link">
                                    <select name="eyes-color" class="cst-filter">
                                        <option value="" selected disabled>Sélectionner une couleur des yeux ?</option>
                                        @foreach($colorsEyes as $colorEyes)
                                            <option value="{{ $colorEyes->id }}">{{ $colorEyes->color_eyes }}</option>
                                        @endforeach
                                    </select>
                                </a>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="cst-filter form-check form-check-inline">
                                    @foreach($genders as $gender)
                                        <label class="form-check-label sidebar-label">{{ $gender->label }}</label>
                                        <input class="form-check-input" type="radio" value="{{ $gender->id }}" name="gender">
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="cst-filter">
                                    @foreach($sizes as $size)
                                        <label class="form-check-label sidebar-label">{{ $size->label }}</label>
                                        <input class="form-check-input" type="radio" value="{{ $size->id }}" name="size">
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="cst-filter">
                                    @foreach($furSizes as $furSize)
                                        <label class="form-check-label sidebar-label">{{ $furSize->label }}</label>
                                        <input class="form-check-input" type="radio" value="{{ $furSize->id }}" name="fur-size">
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="cst-filter">
                                    @foreach($age as $age)
                                        <label class="form-check-label sidebar-label">{{ $age->label }}</label>
                                        <input class="form-check-input" type="radio" value="{{ $age->id }}" name="age">
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="text-center">
                                    <button type="submit">Rechercher</button>
                                    <button type="reset" value="Reset">Réinitialiser le formulaire</button>
                                </div>
                            </li>
                        </form>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 text-center">
                        <a href="#" id="list-icon"class="btn cst-onglet"><i class="fas fa-list"></i></a><p id="cst-display-list">Afficher la liste des animaux recherchés</p>
                        <a href="#" id="map-icon"class="btn cst-onglet"><i class="fas fa-map-marked"></i></a><p id="cst-display-map">Afficher les animaux recherchés à proximité de vous</p>

                    <div id="list-view">
                        <div class="row" id="filtered-view">
                            @foreach($animals as $animal)
                            <div class="col-md-6 ">
                                <div class="cst-card">
                                    <div class="text-center">
                                        <a href="{{ route('card', [$animal->id]) }}">
                                            @if(!empty($animal->picture))
                                                <img src="{{$animal->picture}}" alt="">
                                            @else
                                                <img src="http://placekitten.com/400/300" alt="">
                                            @endif
                                        </a>
                                        <h2>{{$animal->name}}</h2>
                                    </div>
                                    <div class="list">
                                        <ul class="desc">
                                            @if($animal->statu->label === 'perdu')
                                                <li class="desc-list">
                                                    Perdu le :  {{ $animal->statu->lost_at}}
                                                </li>
                                            @elseif ($animal->statu->label === 'trouvé')
                                                <li class="desc-list">
                                                    Trouvé le : {{ $animal->statu->found_at}}
                                                </li>
                                            @endif
                                            <li class="desc-list">
                                                @if ($animal->race->label)
                                                    Race : {{ $animal->race->label}}
                                                @endif
                                            </li>
                                            <li class="desc-list">
                                                @if ($animal->size->label)
                                                    Taille : {{ $animal->size->label}}
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 cst-arrow">
                            <a href=""><i  class="fas fa-arrow-circle-down"></i></a>
                            <a href=""><i  class="fas fa-arrow-circle-up"></i></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

   $(document).ready(function() {
       $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
           }
       });

        let $filter = $('#filter');
        $($filter).submit(function(e){
            e.preventDefault();

            let $types       = ($('select[name="type"] option:selected:not([disabled])').length) ? $('select[name="type"] option:selected:not([disabled])').val():-1;
            let $colors      = ($('select[name="color"] option:selected:not([disabled])').length) ? $('select[name="color"] option:selected:not([disabled])') .val():-1;
            let $colorsEyes  = ($('select[name="eyes-color"] option:selected:not([disabled])').length) ? $('select[name="eyes-color"] option:selected:not([disabled])') .val():-1;
            let $microships  = ($('input[name="microship"]:checked').length) ? $('input[name="microship"]:checked').val():-1;
            let $collars     = ($('input[name="collar"]:checked').length) ? $('input[name="collar"]:checked').val():-1;
            let $genders     = ($('input[name="gender"]:checked').length) ? $('input[name="gender"]:checked').val():-1;
            let $sizes      = ($('input[name="size"]:checked').length) ? $('input[name="size"]:checked').val():-1;
            let $furSizes    = ($('input[name="fur-size"]:checked').length) ? $('input[name="fur-size"]:checked').val():-1;
            let $ages        = ($('input[name="age"]:checked').length) ? $('input[name="age"]:checked').val():-1;


            console.log($colors);
            $.ajax({
                url: "/list",
                type: "POST",
                dataType: "json",
                data:   "types=" + $types +
                        "&colors=" + $colors +
                        "&colorsEyes=" + $colorsEyes +
                        "&microships=" + $microships +
                        "&collars=" + $collars +
                        "&genders=" + $genders +
                        "&sizes=" + $sizes +
                        "&furSizes=" + $furSizes +
                        "&ages=" + $ages ,

            }).done(function (data){
                $data = data;
                console.log($data);
                $('#filtered-view').empty();

                $.each($data, function(i){
                    $('#filtered-view').append('<div class="col-md-6"><div class="cst-card"><div class="text-center"><a href=""><img src="http://placekitten.com/400/250" alt=""></a><h2>' + data[i]['name'] + '</h2></div><div class="list"><ul class="desc"><li class="desc-list">Situation : ' + data[i]['status_id_fk'] + '</li><li class="desc-list">Animal : ' + data[i]['races_label'] + '</li><li class="desc-list">Tailles : <i class="fas fa-dog"></i>' + data[i]['sizes_label'] + '</li><li class="desc-list"></li></ul></div></div></div> ');
                })
            });

        });
    });

</script>
@endsection('content')
