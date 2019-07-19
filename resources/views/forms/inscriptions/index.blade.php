@extends('layouts.master')
@section('scripts-header')
    <link rel="stylesheet" href="{{asset('css/formInscri.css')}}">
@endsection
@section('scripts-footer')
    <script type="text/javascript" src="{{ asset('js/formInscri.js') }}"></script>
@endsection
@section('content')
    <div class="container formInscriptions">
        <form method="Post" enctype="multipart/form-data" autocomplete="on">
            @csrf
            <div class="row" >
                <div class="contact col-md-4">
                    <div class="form-group section">
                        <h3>Nom, prénom et email</h3>
                        <div class="input">
                            <label for="lastname">Nom</label>
                            <input type="text" class="form-control" id="lastname" name="lastname">
                        </div>
                        <div class="input">
                            <label for="firstName">Prénom</label>
                            <input type="text" class="form-control" id="firstname" name="firstname">
                        </div>
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        <div class="input">
                            <label for="phone">Téléphone</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                </div>
                <div class="address col-md-4">
                    <div class="form-group section">
                        <h3>Adresse</h3>
                        <div class="input">
                            <label for="address">Adresse</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-group zipCode" >
                            <label for="zipCode">Code Postal</label>
                            <input type="text" class="form-control" id="zipCode" name="zipCode">
                        </div>
                        <div class="form-group cities" >
                            <label for="inputGroupSelect01">Ville</label>
                            <select name="selectCity" class="custom-select" id="selectCity" required>
                                <option selected>Veuillez sélectionner une ville</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="password col-md-4">
                    <div class="form-group section">
                        <h3>Mot de passe et confirmation</h3>
                        <div class="input">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="input">
                            <label for="checkPassword">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" id="checkPassword" name="checkPassword">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
