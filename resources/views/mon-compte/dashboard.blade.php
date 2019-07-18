@extends('layouts.master')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark cst-nav">
        <a class="navbar-brand" href="http://project.test:8080">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://project.test:8080">Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container cstx-bg">
        <div class="row dash-row dash-top">
            <div class="col-12">
                <h1 class="text-center">Bienvenue, *nom*</h1>
            </div>
        </div>
        <div class="row dash-row">
            <div class="col-6">
                <h2 class="text-center mb-5">Vos Favoris</h2>
                <div class="row mb-4">
                    <div class="col-12">
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
                <div class="row mb-4">
                    <div class="col-12">
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
                <h2 class="text-center mb-5">Vos animaux <a href="{{ action('MonCompteController@form') }}" class="btn btn-primary">Ajouter votre animal</a></h2>
                <div class="row">
                    <div class="col-10 offset-1">
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
    </div>
@endsection
