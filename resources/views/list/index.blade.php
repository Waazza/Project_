@extends('layouts.master')
@section('content')

    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
<<<<<<< Updated upstream

                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <input type="text" id="cst-search" placeholder="Recherchez..">
                </div>
            </div>

        </div>
    </div>
=======
                    <select class="cst-filter">
                        <option disabled selected>Trier par :</option>
                        <option value="0">Date d'ajout</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <select class="cst-filter">
                        <option disabled selected>Quel type d'animal recherchez-vous ?</option>
                        <option value="0">Chat</option>
                        <option value="1">Chien</option>
                        <option value="2">NAC</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <i class='fas fa-search search-icon'></i><input type="search" class="cst-filter" placeholder="Recherchez...">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#" class="btn cst-onglet"><i class="fas fa-list"></i></a><p id="cst-display-list">Afficher la liste des animaux recherchés</p>
                    <a href="#" class="btn cst-onglet"><i class="fas fa-map-marked"></i></a><p id="cst-display-map">Afficher les animaux recherchés à proximité de vous</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                {{--@foreach($animal as $key) --}}
                <div class="col-md-6 ">
                    <div class="cst-card">
                        <div class="text-center">
                            <a href=""><img src="http://placekitten.com/400/250{{--{{ $animal->picture }}--}}" alt=""></a>
                            <h2>{{--{{$animal->name}}--}}</h2>
                        </div>
                        <div class="list">
                            <ul class="desc">
                                <li class="desc-list">
                                    Perdu le : {{-- {{ $status->lost_at }}--}}
                                </li>
                                <li class="desc-list">
                                    Animal : {{--{{ $types->label }}--}}
                                </li>
                                <li class="desc-list">
                                    Tailles :
                                    <i class="fas fa-dog"></i>{{--{{ $size->label }}--}}
                                </li>
                                <li class="desc-list">{{--@if(!empty($animals->collar))--}}
                                    Collier : {{--{{ $animals->collar }}--}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cst-card">
                        <div class="text-center">
                            <a href=""><img src="http://placekitten.com/400/250{{--{{ $animal->picture }}--}}" alt=""></a>
                            <h2>{{--{{$animal->name}}--}}</h2>
                        </div>
                        <div class="list">
                            <ul class="desc">
                                <li class="desc-list">
                                    Perdu le : {{-- {{ $status->lost_at }}--}}
                                </li>
                                <li class="desc-list">
                                    Animal : {{--{{ $types->label }}--}}
                                </li>
                                <li class="desc-list">
                                    Tailles :
                                    <i class="fas fa-dog"></i>{{--{{ $size->label }}--}}
                                </li>
                                <li class="desc-list">{{--@if(!empty($animals->collar))--}}
                                    Collier : {{--{{ $animals->collar }}--}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class ="row">
                <div class="col-md-12 cst-arrow">
                    <a href="#"><i  class="fas fa-arrow-circle-down"></i></a>
                    <a href="#top"><i  class="fas fa-arrow-circle-up"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
>>>>>>> Stashed changes

@endsection('content')
