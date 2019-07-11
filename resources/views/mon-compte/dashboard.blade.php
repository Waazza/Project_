@extends('layouts.master')
@section('content')
    <div class="row dash-row dash-top">
        <div class="col-12">
            <h1 class="text-center">Bienvenue, *nom*</h1>
        </div>
    </div>
    <div class="row dash-row">
        <div class="col-6">
            <h2 class="text-center mb-5">Vos Favoris</h2>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 img-trap">
                                <img src="/storage/cat.jpg" class="card-img img-fluid img-thumb" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">*Nom de l'animal*</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet asperiores aspernatur at consequatur dolorum eaque illo ipsa laboriosam.</p>
                                    <a href="#" class="card-link">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 img-trap">
                                <img src="/storage/cat.jpg" class="card-img img-fluid img-thumb" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">*Nom de l'animal*</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet asperiores aspernatur at consequatur dolorum eaque illo ipsa laboriosam.</p>
                                    <a href="#" class="card-link">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <h2 class="text-center mb-5">Vos animaux</h2>
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card">
                        <div class="img-card"></div>
                        <div class="card-body">
                            <h3 class="card-title">*Nom de l'animal*</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque cum debitis dolor dolorem fugit necessitatibus nobis repellat repellendus unde voluptates.</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Details</a>
                            <a href="#" class="card-link">Perdu</a>
                            <a href="#" class="card-link">Trouve</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id='map' style='width: 400px; height: 300px;'></div>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoid2FhenphIiwiYSI6ImNqeHVjdjlpNzAyZGIzbW9oOGJ1d292M2sifQ.Q8IMBCsYd3VsCfxGavM3AA';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
        });
    </script>





@endsection
