@extends('layouts.master')
@section('content')
    <div class="row dash-row dash-top">
        <div class="col-12">
            <h1 class="text-center">Bienvenue, *nom*</h1>
        </div>
    </div>
    <div class="row dash-row">
        <div class="col-6">
            <h2 class="text-center">Vos Favoris</h2>
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





@endsection
