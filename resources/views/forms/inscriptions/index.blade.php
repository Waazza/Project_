@extends('layouts.master')
@section('content')
    <div class="container formInscriptions">
        <form method="Post" enctype="multipart/form-data">
            @csrf
            <div class="row" >
                <div class="contact col-md-4">
                    <div class="form-group section">
                        <h3>Nom, prénom et email</h3>
                        <div class="input">
                            <label for="lastname">Nom</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="lastname">
                        </div>
                        <div class="input">
                            <label for="firstName">Prénom</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="firstname">
                        </div>
                        <div class="input">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                        </div>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                </div>
                <div class="address col-md-4">
                    <div class="form-group section">
                        <h3>Adresse</h3>
                        <div class="input">
                            <label for="address">Adresse</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="address">
                        </div>
                        <div class="input">
                            <label for="city">Ville</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="city">
                        </div>
                        <div class="input">
                            <label for="zipCode">Code Postal</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="zipCode">
                        </div>
                    </div>
                </div>
                <div class="password col-md-4">
                    <div class="form-group section">
                        <h3>Mot de passe et confirmation</h3>
                        <div class="input">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <div class="input">
                            <label for="checkPassword">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="checkPassword">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection