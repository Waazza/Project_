@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center cst-img-position">
<<<<<<< Updated upstream
                <img src="http://placekitten.com/300/250{{--{{ $animal->picture }}--}}" alt="">
            </div>
            <div class="col-md-6 cst-bloc">
                <h2 class="text-center">Description</h2>
                <ul class="desc">
                    <li class="desc-list">
                        Perdu le : {{-- {{ $status->lost_at }}--}}
                    </li>
                    <li class="desc-list">
                       Nom : {{-- {{ $animal->name }}--}}
                    </li>
                    <li class="desc-list">
                        Animal : {{--{{ $types->label }}--}}
                    </li>
                    <li class="desc-list">{{--@if(!empty($races->label))--}}
                        Race : {{--{{ $races->label }}--}}
                    </li>
                    <li class="desc-list">
                        Genre : {{--{{ $gender->label }}--}}
                    </li>
                    <li class="desc-list">
                        Tailles :
                        <input class="cursorbar" type="range" name="size"  min="0" max="2" value="{{--{{ $size->label }}--}}"disabled>
                    </li>
                    <li class="desc-list">{{--@if(!empty($color_eyes->label))--}}
                        Couleur des yeux : {{--{{ $color_eyes->label }}--}}
                    </li>
                    <li class="desc-list">{{--@if(!empty($fur_sizes->label))--}}
                        Tailles des poils : {{--{{ $fur_sizes->label }}--}}
                    </li>
                    <li class="desc-list">
                        Age :
                        <input class="cursorbar" type="range" name="age"  min="0" max="2" value="{{--{{ $age->label }}--}}"disabled>
                    </li>
                    <li class="desc-list">{{--@if(!empty($animals->collar))--}}
                        Collier : {{--{{ $animals->collar }}--}}
                    </li>
                    <li class="desc-list">{{--@if(!empty($animals->microship))--}}
                        Puce : {{--{{ $animals->microship }}--}}
                    </li>
                    <li class="desc-list">{{--@if(!empty($animals->tatoo))--}}
                        Tatouage : {{--{{ $animals->tatoo }}--}}
                    </li>
                </ul>
=======
                <img src="http://placekitten.com/400/300{{--{{ $animal->picture }}--}}" alt="">
            </div>
            <div class="col-md-6 cst-bloc">
                <h2 class="text-center">Description</h2>
                <div class="row">

                    <div class="col-md-6">
                        <ul class="desc">
                            <li class="desc-list">
                                Perdu le : {{-- {{ $status->lost_at }}--}}
                            </li>
                            <li class="desc-list">
                               Nom : {{-- {{ $animal->name }}--}}
                            </li>
                            <li class="desc-list">
                                Animal : {{--{{ $types->label }}--}}
                            </li>
                            <li class="desc-list">{{--@if(!empty($races->label))--}}
                                Race : {{--{{ $races->label }}--}}
                            </li>
                            <li class="desc-list">
                                Genre : {{--{{ $gender->label }}--}}
                            </li>
                            <li class="desc-list">
                                Tailles :
                                <i class="fas fa-dog"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="desc">
                            <li class="desc-list">{{--@if(!empty($color_eyes->label))--}}
                                Couleur des yeux : {{--{{ $color_eyes->label }}--}}
                            </li>
                            <li class="desc-list">{{--@if(!empty($fur_sizes->label))--}}
                                Tailles des poils : {{--{{ $fur_sizes->label }}--}}
                            </li>
                            <li class="desc-list">{{--@if(!empty($animals->collar))--}}
                                Collier : {{--{{ $animals->collar }}--}}
                            </li>
                            <li class="desc-list">{{--@if(!empty($animals->microship))--}}
                                Puce : {{--{{ $animals->microship }}--}}
                            </li>
                            <li class="desc-list">{{--@if(!empty($animals->tatoo))--}}
                                Tatouage : {{--{{ $animals->tatoo }}--}}
                            </li>
                            <li class="desc-list">
                                Age :
                                <i class="fas fa-dog"></i>
                            </li>
                        </ul>
                    </div>
                 </div>
>>>>>>> Stashed changes
            </div>
        </div>
        {{--@if(!empty($animals->comment))--}}
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="cst-bloc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolorem minima officia officiis voluptatem? At delectus deleniti doloremque dolorum facere inventore labore modi nihil nisi nobis optio, possimus repellat similique?{{--$animal->comment--}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
<<<<<<< Updated upstream
                <img <img src="http://placekitten.com/1140/500" alt="">
=======
                <img src="http://placekitten.com/1140/500" alt="">
>>>>>>> Stashed changes
            </div>
        </div>
    </div>
</div>

@endsection('content')
