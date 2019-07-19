@extends('layouts.master')
@section('scripts-header')
    <link rel="stylesheet" href="{{asset('css/addAnimal.css')}}">
@endsection
@section('scripts-footer')
    <script type="text/javascript" src="{{ asset('js/addAnimal.js') }}"></script>
@endsection
@section('content')
    <div class="container">
        <form method="Post" enctype="multipart/form-data">
            @csrf
            <div class="formAnimal">
                <div class="row">
                    <div class="col-6 picturInput">
                        <div class="btn btn-block btn-primary img-fluid">
                            <input type="file" style="display: none;" name="picture">
                        </div>
                    </div>
                    <div class="col-6 categoryInput">
                        <div class="form-group category" >
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nom de l'animal">
                        </div>
                        <div class="form-group category" >
                            <label for="type">Type</label>
                            <select class="form-control" id="type" name="type">
                                <option selected></option>
                                @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->label}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group dogRace" id="dogRace">
                            <label for="dogLabel">Race</label>
                            <input type="text" name="dogRace" list="dog" class="form-control" id="dogLabel">
                            <datalist id="dog">
                                @foreach($dogs as $dog)
                                    <option value="{{$dog->label}}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="form-group catRace" id="catRace">
                            <label for="catLabel">Race</label>
                            <input type="text" name="catRace" list="cat" class="form-control" id="catLabel">
                            <datalist id="cat">
                                @foreach($cats as $cat)
                                    <option value="{{$cat->label}}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="form-group nacRace" id="nacRace">
                            <label for="nacLabel">Race</label>
                            <input type="text" name="nacRace" list="nac" class="form-control" id="nacLabel">
                            <datalist id="nac">
                                @foreach($nacs as $nac)
                                    <option value="{{$nac->label}}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="form-group category" >
                            <label for="gender">Genre</label>
                            <select class="form-control" id="gender" name="gender">
                                <option selected></option>
                                @foreach($genders as $gender)
                                    <option value="{{$gender->id}}">{{$gender->label}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group category">
                            <label for="age">Age</label>
                            <input type="range" class="form-control-range" id="age" name="age" min="1" max="3" step="1" >
                        </div>
                        <div class="form-group category">
                            <label for="size">Taille</label>
                            <input type="range" class="form-control-range" id="size" name="size" min="1" max="3" step="1" >
                        </div>
                        <div class="form-group category" >
                            <label for="color">Couleur du pelage</label>
                            <select class="form-control" id="color" name="color">
                                <option selected></option>
                                @foreach($colors as $color)
                                    <option value="{{$color->id}}">{{$color->label}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group category">
                            <label for="eyesColor">Couleur des yeux</label>
                            <select class="form-control" id="eyesColor" name="eyesColor">
                                <option selected></option>
                                @foreach($colorEyes as $colorEye)
                                    <option value="{{$colorEye->id}}">{{$colorEye->label}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group category">
                            <label for="furSize">Taille des poils</label>
                            <select class="form-control" id="furSize" name="furSize">
                                <option selected></option>
                                @foreach($furSizes as $furSize)
                                    <option value="{{$furSize->id}}">{{$furSize->label}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group category">
                            <label for="">Tatouage</label>
                            <input type="radio" id="tatooYes" name="checkTatoo" value="1" >
                            <label for="TatooYes">Oui</label>
                            <input type="radio" id="tatooNo " name="checkTatoo" value="0" >
                            <label for="TatooNo ">Non</label>
                        </div>
                        <div class="form-group tatooInput" id="tatooInput">
                            <label for="tatoo">Numero du tatouage</label>
                            <input type="text" name="tatoo" id="tatoo" class="form-control">
                        </div>
                        <div class="form-group category">
                            <label for="microship">Puce electronique</label>
                            <input type="radio" id="microYes" name="microship" value="1" >
                            <label for="microYes">Oui</label>
                            <input type="radio" id="microNo" name="microship" value="0" >
                            <label for="microNo">Non</label>
                        </div>
                        <div class="form-group category">
                            <label for="collar">Collier</label>
                            <input type="radio" id="collarYes" name="collar" value="1" >
                            <label for="collarYes">Oui</label>
                            <input type="radio" id="collarNo" name="collar" value="0" >
                            <label for="collarNo">Non</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 comment">
                    <div class="form-group">
                        <label for="comment">Commentaire</label>
                        <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
@endsection
