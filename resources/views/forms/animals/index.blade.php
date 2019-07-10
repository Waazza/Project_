@extends('layouts.master')
@section('content')
    <form method="Post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="custom-file mt-3">
                    <label class="custom-file-label" for="photo">Photo</label>
                    <input type="file" class="custom-file-input" id="photo" name="photo" value="photo">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group" style="display:flex; justify-content:space-evenly;">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" style="width:30%;">
                </div>
                <div class="form-group" style="display:flex; justify-content:space-evenly;">
                    <label for="type">Type</label>
                    <select class="form-control" id="type" name="type" style="width:30%;">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
                <div class="form-group" style="display:flex; justify-content:space-evenly;">
                    <label for="gender">Genre</label>
                    <select class="form-control" id="gender" name="gender" style="width:30%;">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
                <div class="form-group" style="display:flex; justify-content:space-evenly;">
                    <label for="age">Age</label>
                    <input type="range" class="form-control-range" id="age" name="age" style="width:30%;">
                </div>
                <div class="form-group" style="display:flex; justify-content:space-evenly;">
                    <label for="color">Couleur</label>
                    <select class="form-control" id="color" name="color" style="width:30%;">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
                <div class="form-group" style="display:flex; justify-content:space-evenly;">
                    <select class="form-control" id="add" name="add">
                        <option>Ajouter des caractéristique</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
            </div>
        </div>
       <div class="col-12">
           <div class="form-group">
               <label for="comment">Commentaire</label>
               <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
           </div>
       </div>
    </form>
@endsection