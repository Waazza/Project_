@extends('layouts.master')
@section('content')
    <form method="Post" enctype="multipart/form-data">
        @csrf
        <div class="container formAnimal">
            <div class="row">
                <div class="col-6 picturInput">
                    <label class="btn btn-block btn-primary img-fluid">
                        <input type="file" style="display: none;">
                    </label>
                    <div class="input-append date form_datetime">
                        <input type="text" id="datepicker" readonly>
                    </div>
                </div>
                <div class="col-6 categoryInput">
                    <div class="form-group category" >
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group category" >
                        <label for="type">Type</label>
                        <select class="form-control" id="type" name="type">
                            @foreach($types as $type)
                            <option value="{{$type->label}}">{{$type->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group category" >
                        <label for="gender">Genre</label>
                        <select class="form-control" id="gender" name="gender">
                            @foreach($genders as $gender)
                                <option value="{{$gender->label}}">{{$gender->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group category">
                        <label for="age">Age</label>
                        <input type="range" class="form-control-range" id="age" name="age">
                    </div>
                    <div class="form-group category" >
                        <label for="color">Couleur</label>
                        <select class="form-control" id="color" name="color">
                            @foreach($colors as $color)
                                <option value="{{$color->label}}">{{$color->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group category">
                        <select class="form-control addCategory" id="add" name="add">
                            <option>Ajouter des caractéristique</option>
                            <option value="">2</option>
                        </select>
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
    </form>
@endsection
