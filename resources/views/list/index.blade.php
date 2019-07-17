@extends('layouts.master')
@section('content')
   {{--     {{ dd($animals) }}--}}
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <form class="cst-filter" action="{{ route('search') }}" method="GET" id="abc">
                                {{csrf_field()}}
                            <a class="nav-link" href="#">
                                <i class='fas fa-search search-icon'></i><input name="search" type="search" class="cst-filter" placeholder="Recherchez...">
                            </a>
                            </form>
                        </li>
                        <li class="nav-item">
                            <form class="cst-filter" action="{{ route('race') }}" method="GET" >
                                {{csrf_field()}}
                                <a class="nav-link" href="#">
                                    <i class='fas fa-search search-race-icon'></i><input name="race" type="search" class="cst-filter" placeholder="Race...">
                                </a>
                            </form>
                        </li>
                        <form class="cst-filter" action="{{ route('filter') }}" method="POST" id="filter">
                            {{csrf_field()}}
                            <li class="nav-item">
                                <a class="nav-link" href="#">
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
                                    <select name="color" class="cst-filter">
                                        <option value="" selected disabled>Sélectionner une couleur de poil ?</option>
                                        @foreach($colors as $color)
                                            <option value="{{ $color->id }}">{{ $color->label }}</option>
                                        @endforeach
                                    </select>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
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
                                        <label class="form-check-label">{{ $gender->label }}</label>
                                        <input class="form-check-input" type="radio" value="{{ $gender->id }}" name="gender">
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="cst-filter">
                                    @foreach($sizes as $size)
                                        <label class="form-check-label">{{ $size->label }}</label>
                                        <input class="form-check-input" type="radio" value="{{ $size->id }}" name="size">
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="cst-filter">
                                    @foreach($furSizes as $furSize)
                                        <label class="form-check-label">{{ $furSize->label }}</label>
                                        <input class="form-check-input" type="radio" value="{{ $furSize->id }}" name="fur-size">
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item nav-link">
                                <div class="cst-filter">
                                    @foreach($age as $age)
                                        <label class="form-check-label">{{ $age->label }}</label>
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
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <i class="fas fa-list cst-onglet" id="list-icon"></i>
                        <i class="fas fa-map-marked cst-onglet" id="map-icon"></i>
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

                    </div>
                    <div class="row">
                        <div class="col-md-12 cst-arrow">
                            <i class="fas fa-arrow-circle-down"></i>
                            <i class="fas fa-arrow-circle-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')
