@extends('layouts.master')
@section('content')
   {{--     {{ dd($animals) }}--}}
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <form action="{{ route('search') }}" method="GET" >
                                    {{csrf_field()}}
                                    <i class='fas fa-search search-icon'></i><input name="search" type="search" class="cst-filter" placeholder="Recherchez...">
                                </form>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <select class="cst-filter">
                                    <option disabled selected>Trier par :</option>
                                    <option value="1">Date d'ajout</option>
                                </select>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <select name="type" class="cst-filter">
                                    <option disabled selected>Quel type d'animal recherchez-vous ?</option>
                                    @foreach($types as $type)
                                        <option value="{{ $type->id }}">{{ $type->label }}</option>
                                    @endforeach
                                </select>
                            </a>
                        </li>

                        <li class="nav-item nav-link">
                            <div class="cst-filter form-check form-check-inline">
                                <label class="form-check-label">Tatoué</label>
                                <input class="form-check-input" name="tatoo" type="radio" value="0">

                                <label class="form-check-label">Non Tatoué</label>
                                <input class="form-check-input" name="tatoo" type="radio" value="1">
                            </div>
                        </li>
                        <li class="nav-item nav-link">
                            <div class="cst-filter form-check form-check-inline">
                                <label class="form-check-label">Pucé</label>
                                <input class="form-check-input" name="microship" type="radio" value="0">

                                <label class="form-check-label">Non Pucé</label>
                                <input class="form-check-input" name="microship" type="radio" value="1">
                            </div>
                        </li>
                        <li class="nav-item nav-link">
                            <div class="cst-filter form-check form-check-inline">
                                <label class="form-check-label">Collier</label>
                                <input class="form-check-input" name="collar" type="radio" value="0">

                                <label class="form-check-label">Sans Collier</label>
                                <input class="form-check-input" name="collar" type="radio" value="1">
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <select name="color" id="color" class="cst-filter">
                                    <option disabled selected>Sélectionner une couleur de poil ?</option>
                                    @foreach($colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->label }}</option>
                                    @endforeach
                                </select>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <select name="eyes-color" class="cst-filter">
                                    <option disabled selected>Sélectionner une couleur des yeux ?</option>
                                    @foreach($colorsEyes as $colorEyes)
                                        <option value="{{ $colorEyes }}">{{ $colorEyes->color_eyes }}</option>
                                    @endforeach
                                </select>
                            </a>
                        </li>
                        <li class="nav-item nav-link">
                            <div class="cst-filter form-check form-check-inline">
                                @foreach($genders as $gender)
                                    <label class="form-check-label">{{ $gender->label }}</label>
                                    <input class="form-check-input" type="radio" {{ $gender->id }} name="gender">
                                @endforeach
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <form action="{{ route('search') }}" method="GET" >
                                    {{csrf_field()}}
                                    <i class='fas fa-search search-race-icon'></i><input name="search" type="search" class="cst-filter" placeholder="Race...">
                                </form>
                            </a>
                        </li>
                        <li class="nav-item nav-link">
                            <div class="cst-filter">
                                <label class="form-check-label">Taille</label>
                                <input class="form-check-input" name="size" type="range" min="0" max="2" value="">
                            </div>
                        </li>
                        <li class="nav-item nav-link">
                            <div class="cst-filter">
                                <label class="form-check-label">Taille des poils</label>
                                <input class="form-check-input" name="fur-size" type="range" min="0" max="2" value="">
                            </div>
                        </li>
                        <li class="nav-item nav-link">
                            <div class="cst-filter">
                                <label class="form-check-label">Age</label>
                                <input class="form-check-input" name="age" type="range" min="0" max="2" value="">
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="#" id="list-icon"class="btn cst-onglet"><i class="fas fa-list"></i></a><p id="cst-display-list">Afficher la liste des animaux recherchés</p>
                        <a href="#" id="map-icon"class="btn cst-onglet"><i class="fas fa-map-marked"></i></a><p id="cst-display-map">Afficher les animaux recherchés à proximité de vous</p>
                    </div>
                </div>

                <div class="container">
                    <div id="list-view">
                        <div class="row">
                            @foreach($animals as $animal)
                            <div class="col-md-6 ">
                                <div class="cst-card">
                                    <div class="text-center">
                                        <a href=""><img src="http://placekitten.com/400/250{{--{{ $animal->picture }}--}}" alt=""></a>
                                        <h2>{{$animal->name}}</h2>
                                    </div>
                                    <div class="list">
                                        <ul class="desc">
                                            <li class="desc-list">
                                                Perdu le : {{ $animal->id_status_fk }}
                                            </li>
                                            <li class="desc-list">
                                                Animal : {{ $animal->id_races_fk }}
                                            </li>
                                            <li class="desc-list">
                                                Tailles :
                                                <i class="fas fa-dog"></i>{{ $animal->id_size_fk }}
                                            </li>
                                            <li class="desc-list">
                                                @if($animal->collar != null)
                                                    Collier : {{ $animal->collar }}
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="map-view">
                        <div class="row">
                            <div class="col-md-12">
                                <img src="http://placekitten.com/1140/500" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 cst-arrow">
                            <a href="#"><i  class="fas fa-arrow-circle-down"></i></a>
                            <a href="#top"><i  class="fas fa-arrow-circle-up"></i></a>
                        </div>
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

       $('#color').change(function(){
           var $color = $('#color').val();

           // console.log('toto');

           $.ajax({
               url: '/color',
               method: "GET",
               data: 'color=' + $color,


           }).done(function (){ });

       });
   });


   </script>
@endsection('content')
