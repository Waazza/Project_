@extends('layouts.master')
@section('content')
@section('scripts-header')
    <link rel="stylesheet" href="{{asset('css/card.css')}}">
@endsection

{{--    {{ dd($animal) }}--}}
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center cst-img-position">
                @if(!empty($singleAnimal->picture))
                    <img class="cst-size-img" src="{{$singleAnimal->picture}}" alt="">
                @else
                    <img class="cst-size-img" src="/storage/unknowDog.png" alt="">
                @endif
            </div>
            <div class="col-md-6 cst-bloc">
                <h2 class="text-center">Description</h2>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="desc">
                            <li class="desc-list">
                                Nom : {{ $singleAnimal->name}}
                            </li>
                            @if($singleAnimal->statu->label === 'perdu')
                            <li class="desc-list">
                                Perdu le :  {{ $singleAnimal->statu->lost_at}}
                            </li>
                            @elseif ($singleAnimal->statu->label === 'trouvé')
                            <li class="desc-list">
                                Trouvé le : {{ $singleAnimal->statu->found_at}}
                            </li>
                            @endif
                            <li class="desc-list">
                                @if ($singleAnimal->color->label)
                                    Couleur des poils : {{ $singleAnimal->color->label}}
                                @endif
                            </li>
                            <li class="desc-list">
                                @if ($singleAnimal->size->label)
                                    Taille : {{ $singleAnimal->size->label}}
                                @endif
                            </li>
                            <li class="desc-list">
                                @if ($singleAnimal->gender->label)
                                    Genre : {{ $singleAnimal->gender->label}}
                                @endif
                            </li>
                            <li class="desc-list">
                                @if ($singleAnimal->race->label)
                                    Race : {{ $singleAnimal->race->label}}
                                @endif
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="desc">
                            @if(!empty($singleAnimal->colorEyes->label))
                            <li class="desc-list">
                                Couleur des yeux : {{ $singleAnimal->colorEyes->label}}
                            </li>
                            @endif
                            @if(!empty($singleAnimal->furSize->label))
                            <li class="desc-list">
                                Tailles des poils : {{ $singleAnimal->furSize->label}}
                            </li>
                            @endif
                            @if(!empty($singleAnimal->collar))
                            <li class="desc-list">
                                Collier : {{ $singleAnimal->collar }}
                            </li>
                            @endif
                            @if(!empty($singleAnimal->microship))
                            <li class="desc-list">
                                Puce : {{ $singleAnimal->microship }}
                            </li>
                            @endif
                            @if(!empty($singleAnimal->tatoo))
                            <li class="desc-list">
                                Tatouage : {{ $singleAnimal->tatoo }}
                            </li>
                             @endif
                            <li class="desc-list">
                            @if(!empty($singleAnimal->age->label))
                                Age :{{ $singleAnimal->age->label }}
                            @endif
                            </li>
                        </ul>
                    </div>
                 </div>
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
                <img src="http://placekitten.com/1140/500" alt="">
            </div>
        </div>
    </div>
</div>

@endsection('content')
