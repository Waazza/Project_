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
                    <div class="form-group category">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name"> 
                    </div>
                    <div class="form-group category">
                        <label for="type">Type</label> 
                        <select class="form-control" id="type" name="type"> 
                            <option value="0">Choisir le type</option>
                            @foreach($types as $type) 
                                <option value="{{$type->id}}">{{$type->label}}</option> 
                            @endforeach 
                        </select>
                    </div> 
                    <div class="form-group category"> 
                        <label for="gender">Genre</label> 
                        <select class="form-control" id="gender" name="gender"> 
                            <option>Choisir le genre</option>
                            @foreach($genders as $gender) 
                                <option value="{{$gender->label}}">{{$gender->label}}</option>
                            @endforeach 
                        </select>
                    </div> 
                    <div class="form-group category">
                        <label for="age">Age</label>
                        <input type="range" id="age" class="age" name="age" min="1" max="3" step="1"/>
                    </div>
                    <div class="form-group category"> 
                        <label for="color">Couleur</label> 
                        <select class="form-control" id="color" name="color">
                            <option>Choisir une couleur</option> 
                            @foreach($colors as $color)
                                <option value="{{$color->label}}">{{$color->label}}</option>
                            @endforeach 
                        </select> 
                    </div>
                      <div class="form-group category" id="eyes">
                          <label for="color">Couleur des yeux</label>
                          <select class="form-control" id="color" name="color"> 
                              <option>Choisir une couleur</option>
                              @foreach($colorEyes as $color)
                                  <option value="{{$color->label}}">{{$color->label}}</option> 
                              @endforeach
                          </select>
                      </div>
                    <div class="form-group category" id="fur">
                        <label for="furSize">Taille des poils</label> 
                        <select class="form-control" id="furSize" name="furSize">
                            <option>Choisir une taille</option> 
                            @foreach($furSizes as $fur) 
                                <option value="{{$fur->label}}">{{$fur->label}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="raceChoice">
                        <div class="form-group category dogRace" id="dogRace">
                            <label for="dogLabel">Race du chien</label>
                            <input type="text" name="dogRace" list="dog" class="form-control" id="dogLabel">
                            <datalist id="dog">
                                @foreach($dogs as $dog)
                                    <option value="{{$dog->label}}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="form-group category catRace" id="catRace">
                            <label for="catLabel">Race du chat</label>
                            <input type="text" name="catRace" list="cat" class="form-control" id="catLabel">
                            <datalist id="cat">
                                @foreach($cats as $cat)
                                    <option value="{{$cat->label}}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="form-group category nacRace" id="nacRace">
                            <label for="nacLabel">Categorie de l'animale</label>
                            <input type="text" name="nacRace" list="nac" class="form-control" id="nacLabel">
                            <datalist id="nac">
                                @foreach($nacs as $nac)
                                    <option value="{{$nac->label}}">
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group category" id="size">
                        <label for="Size">Taille de l'animale </label>
                        <select class="form-control" id="size" name="size"> 
                            <option>Choisir une taille</option>
                            @foreach($sizes as $size)
                                <option value="{{$size->label}}">{{$size->label}}</option>
                            @endforeach 
                        </select> 
                    </div>
                    <div class="form-group category menuCaracteristique">
                        <table class="table">
                          <thead id="menuCaracteristique" class="btn btn-outline-primary">
                            <tr>
                              <th colspan="3" scope="col">Ajouter des caracteristique</th>
                            </tr>
                          </thead>
                          <tbody id="hidden">
                            <tr>
                                <td scope="row">Couleurs des yeux</td>
                                <td><a href=""><img id="addEyes" class="add" src="/storage/add1.png" alt="add"></a></td>
                                <td><a href=""><img id="lessEyes" class="less" src="/storage/less1.png" alt="less"></a></td>
                            </tr>
                            <tr>
                                <td scope="row">Taille des poils</td>
                                <td><a href=""><img id="addFur" class="add"  src="/storage/add1.png" alt="add"></a></td>
                                <td><a href=""><img id="lessFur" class="less" src="/storage/less1.png" alt="less"></a></td>
                            </tr>
                            <tr>
                                <td scope="row">Race</td>
                                <td><a href=""><img id="addRace" class="add"  src="/storage/add1.png" alt="add"></a></td>
                                <td><a href=""><img id="lessRace" class="less" src="/storage/less1.png" alt="less"></a></td>
                            </tr>
                            <tr>
                                <td scope="row">Taille</td>
                                <td><a href=""><img id="addSize" class="add"  src="/storage/add1.png" alt="add"></a></td>
                                <td><a href=""><img id="lessSize" class="less" src="/storage/less1.png" alt="less"></a></td>
                            </tr>
                          </tbody>
                        </table> 
                    </div> 
                </div> 
            </div> 
            <div class="col-12 comment">
                <div class="form-group">
                    <label for="comment">Commentaire</label> 
                    <textarea class="form-control" id="comment" rows="3" name="comment"></textarea> 
                </div> 
            </div>
            <div class="row">
                <div class="form-group form-check keepIt">
                    <div class="col-4 checkHome">
                        <input type="checkbox" class="form-check-input" id="home">
                        <label class="form-check-label" for="home">Garder à la maison</label>
                    </div> 
                    <div class="col-4 checkRefuge"> 
                        <div class="refuge"> 
                            <input type="checkbox" class="form-check-input" id="refuge"> 
                            <label class="form-check-label" for="refuge">Je l'améne au refuge pour</label> 
                        </div>
                        <div> 
                            <input type="number" class="day">
                            <label for="jour">jour(s)</label> 
                        </div> 
                    </div> 
                    <div class="col-4"> 
                        <div> 
                            <input type="text" class="address">
                        </div>
                        <div>
                            <a href="">Trouver un refuge à proximité</a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div> 
                <div id='map' style='width: 100%; height: 300px;'></div> 
            </div>
        </div>
    </form> 
@endsection
