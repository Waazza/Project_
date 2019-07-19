@extends('layouts.master')

@section('scripts-header')
    <link rel="stylesheet" href="{{asset('css/list.css')}}">
@endsection
@section('scripts-footer')
    <script type="text/javascript" src="{{ asset('js/list.js') }}"></script>
@endsection
@section('content')

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Recherche avancée </div>
        <div class="list-group list-group-flush">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <form class="cst-filter" action="{{ route('search') }}" method="GET">
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
                                <option value="" selected disabled>Type d'animal</option>
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
                                <option value="" selected disabled>Couleur de poil</option>
                                @foreach($colors as $color)
                                    <option value="{{ $color->id }}">{{ $color->label }}</option>
                                @endforeach
                            </select>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            <select name="eyes-color" class="cst-filter">
                                <option value="" selected disabled>Couleur des yeux</option>
                                @foreach($colorsEyes as $colorEyes)
                                    <option value="{{ $colorEyes->id }}">{{ $colorEyes->color_eyes }}</option>
                                @endforeach
                            </select>
                        </a>
                    </li>
                    <li class="nav-item nav-link">
                        <label class="form-check-label sidebar-header-label">Genre de l'animal :</label>
                        <div class="cst-filter form-check form-check-inline">

                            @foreach($genders as $gender)
                                @if ($gender->label != 'Inconnu')
                                    <label class="form-check-label sidebar-label">{{ $gender->label }}</label>
                                    <input class="form-check-input" type="radio" value="{{ $gender->id }}" name="gender">
                                @endif
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item nav-link">
                        <label class="form-check-label sidebar-header-label">Taille de l'animal :</label>
                        <div class="cst-filter-3-options">
                            @foreach($sizes as $size)
                                <label class="form-check-label sidebar-label">{{ $size->label }}</label>
                                <input class="form-check-input" type="radio" value="{{ $size->id }}" name="size">
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item nav-link">
                        <label class="form-check-label sidebar-header-label">Taille des poils :</label>
                        <div class="cst-filter-3-options">
                            @foreach($furSizes as $furSize)
                                <label class="form-check-label sidebar-label">{{ $furSize->label }}</label>
                                <input class="form-check-input" type="radio" value="{{ $furSize->id }}" name="fur-size">
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item nav-link">
                        <label class="form-check-label sidebar-header-label">Age de l'animal :</label>
                        <div class="cst-filter-3-options">
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
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button id="menu-toggle">Filtrer</button>
        </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sd-12 text-center">
                        <a href="#" id="list-icon"class="btn cst-onglet"><i class="fas fa-list"></i></a><p id="cst-display-list">Afficher la liste des animaux recherchés</p>
                        <a href="#" id="map-icon"class="btn cst-onglet"><i class="fas fa-map-marked"></i></a><p id="cst-display-map">Afficher les animaux recherchés à proximité de vous</p>

                    <div id="list-view">
                        <div class="row" id="filtered-view">
                            @foreach($animals as $animal)
                                @if ($animal > '1')
                                <div class="col-lg-6 col-md-12">
                                @else
                                <div class="col-lg-12 col-md-12">
                                @endif
                                <div class="cst-card">
                                    <div class="text-center">
                                        <a href="{{ route('card', [$animal->id]) }}">
                                            @if(!empty($animal->picture))
                                                <img class="cst-size-img" src="{{$animal->picture}}" alt="">
                                            @else
                                                <img class="cst-size-img" src="/storage/unknowDog.png" alt="">
                                            @endif
                                        </a>
                                        <h2>{{$animal->name}}</h2>
                                    </div>
                                    <div class="list">
                                        <ul class="desc text-left">
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


@endsection

