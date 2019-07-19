@extends('layouts.master')
@section('scripts-header')
    <link rel="stylesheet" href="{{asset('css/formAnimal.css')}}">
@endsection
@section('scripts-footer')
    <script type="text/javascript" src="{{ asset('js/formAnimal.js') }}"></script>
@endsection
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
                    @if($_SERVER['REDIRECT_URL'] == '/lost')
                        <div class="form-group category">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" name="name"> 
                        </div>
                    @endif 
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
                            <label for="age">Age approximatif</label>
                            <select class="form-control" id="age" name="age">
                                <option>Selectionner</option> 
                                @foreach($ages as $age)
                                    <option value="{{$age->label}}">{{$age->label}}</option>
                                @endforeach
                            </select>
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
                        <div class="form-group category eyes" id="eyes">
                            <label for="color">Couleur des yeux</label> 
                            <select class="form-control" id="color" name="color">
                                <option>Choisir une couleur</option> 
                                @foreach($colorEyes as $color)
                                    <option value="{{$color->label}}">{{$color->label}}</option>
                                @endforeach 
                            </select> 
                        </div>
                        <div class="form-group category fur" id="fur"> 
                            <label for="furSize">Taille des poils</label>
                            <select class="form-control" id="furSize" name="furSize">
                                <option>Choisir une taille</option>
                                @foreach($furSizes as $fur)
                                    <option value="{{$fur->label}}">{{$fur->label}}</option> 
                                @endforeach
                            </select> 
                        </div>
                    <div id="raceChoice">
                        <div class="form-group category dogRace animal" id="dogRace">
                            <label for="dogLabel">Race du chien</label>
                            <input type="text" name="dogRace" list="dog" class="form-control" id="dogLabel">
                            <datalist id="dog">
                                @foreach($dogs as $dog)
                                    <option value="{{$dog->label}}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="form-group category catRace animal" id="catRace">
                            <label for="catLabel">Race du chat</label>
                            <input type="text" name="catRace" list="cat" class="form-control" id="catLabel">
                            <datalist id="cat">
                                @foreach($cats as $cat)
                                    <option value="{{$cat->label}}">
                                @endforeach
                            </datalist>
                        </div>
                        <div class="form-group category nacRace animale" id="nacRace">
                            <label for="nacLabel">Categorie de l'animale</label>
                            <input type="text" name="nacRace" list="nac" class="form-control" id="nacLabel">
                            <datalist id="nac">
                                @foreach($nacs as $nac)
                                    <option value="{{$nac->label}}">
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group category size" id="size">
                        <label for="Size">Taille de l'animale </label>
                        <select class="form-control" id="size" name="size"> 
                            <option>Choisir une taille</option>
                            @foreach($sizes as $size)
                                <option value="{{$size->label}}">{{$size->label}}</option> 
                            @endforeach
                        </select> 
                    </div>
                    <div class="form-group category collar" id="collar">
                        <label for="collar">Collier </label> 
                        <div class="row chooseYesNo">
                            <div class="col-6 yesNo">
                                <input type="radio" class="form-check-input" name="collar">
                                <label class="form-check-label" for="collar">Oui</label>
                            </div>
                            <div class="col-6 yesNo">
                                <input type="radio" class="form-check-input" name="collar">                                     <label class="form-check-label" for="collar">Non</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group category tatoo" id="tatoo"> 
                        <label for="tatoo">Tatouage </label> 
                        <div class="row chooseYesNo">
                            <div class="col-6 yesNo">
                                <input type="radio" class="form-check-input" name="tatoo"> 
                                <label class="form-check-label" for="tatoo">Oui</label>
                            </div>
                            <div class="col-6 yesNo">
                                <input type="radio" class="form-check-input" name="tatoo"> 
                                <label class="form-check-label" for="tatoo">Non</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group category microship" id="microship">
                        <label for="microship">Puce </label>
                        <div class="row chooseYesNo">
                            <div class="col-6 yesNo">
                                <input type="radio" class="form-check-input" name="microship">                                     <label class="form-check-label" for="microship">Oui</label>
                            </div> 
                            <div class="col-6 yesNo">
                                <input type="radio" class="form-check-input" name="microship">                                     <label class="form-check-label" for="microship">Non</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group category menuCaracteristique">
                        <table class="table table-borderless">
                            <thead id="menuCaracteristique" class="btn btn-outline-primary">
                            <tr>
                                <th colspan="3" scope="col">Ajouter des caracteristique</th>
                            </tr>
                            </thead>
                            <tbody id="hidden">
                            <tr>
                                <td scope="row">Couleurs des yeux</td>
                                <td><img class="btn btn-outline-primary add" id="addEyes" src="{{ asset('/storage/add1.png') }}" alt="add"></td>
                                <td><img class="btn btn-outline-primary less" id="lessEyes" src="{{ asset('/storage/less1.png') }}" alt="less"></td>
                            </tr>
                            <tr>
                                <td scope="row">Taille des poils</td>
                                <td><img class="btn btn-outline-primary add" id="addFur"  src="{{ asset('/storage/add1.png') }}" alt="add"></td>
                                <td><img class="btn btn-outline-primary less" id="lessFur" src="{{ asset('/storage/less1.png') }}" alt="less"></td>
                            </tr>
                            <tr>
                                <td scope="row">Race</td>
                                <td><img class="btn btn-outline-primary add" id="addRace"  src="{{ asset('/storage/add1.png') }}" alt="add"></td>
                                <td><img class="btn btn-outline-primary less" id="lessRace" src="{{ asset('/storage/less1.png') }}" alt="less"></td>
                            </tr>
                            <tr>
                                <td scope="row">Taille</td>
                                <td><img class="btn btn-outline-primary add" id="addSize"  src="{{ asset('/storage/add1.png') }}" alt="add"></td>
                                <td><img class="btn btn-outline-primary less" id="lessSize" src="{{ asset('/storage/less1.png') }}" alt="less"></td>
                            </tr>
                            <tr>
                                <td scope="row">Collier</td>
                                <td><img class="btn btn-outline-primary add" id="addCollar"  src="{{ asset('/storage/add1.png') }}" alt="add"></td>
                                <td><img class="btn btn-outline-primary less" id="lessCollar" src="{{ asset('/storage/less1.png') }}" alt="less"></td>
                            </tr>
                            <tr>
                                <td scope="row">Tatouage</td>
                                <td><img class="btn btn-outline-primary add" id="addTatoo"  src="{{ asset('/storage/add1.png') }}" alt="add"></td>
                                <td><img class="btn btn-outline-primary less" id="lessTatoo" src="{{ asset('/storage/less1.png') }}" alt="less"></td>
                            </tr>
                            <tr>
                                <td scope="row">Puce</td>
                                <td><img class="btn btn-outline-primary add" id="addMicroship"  src="{{ asset('/storage/add1.png') }}" alt="add"></td>
                                <td><img class="btn btn-outline-primary less" id="lessMicroship" src="{{ asset('/storage/less1.png') }}" alt="less"></td>
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
            @if($_SERVER['REDIRECT_URL'] == '/found')
                <div class="row"> 
                    <div class="form-group form-check keepIt"> 
                        <div class="col-4 checkHome">
                            <input type="radio" class="form-check-input" id="home" name="keep">
                            <label class="form-check-label" for="home">Garder à la maison</label>
                        </div>
                        <div class="col-4 checkRefuge">
                            <div class="refuge">
                                <input type="radio" class="form-check-input" id="refuge" name="keep"> 
                                <label class="form-check-label" for="refuge">Je l'améne au refuge pour</label>                         </div>                         <div>                             <input type="number" class="day">                             <label for="jour">jour(s)</label>                         </div>                     </div>                     <div class="col-4">                         <div>                             <p id="refugeBtn" class="btn btn-outline-primary">Trouver un refuge à proximité</p>                         </div>                     </div>                 </div>             </div>
            @endif
            <div>
                <div class="mapRefuge" id="mapRefuge">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11316.446089029834!2d-0.5920038!3d44.83966215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1563445195651!5m2!1sfr!2sfr" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div id='map' style='width: 100%; height: 300px;'></div> 
            </div>
            <div class="submit">
                <button type="button" class="btn btn-primary">Envoyer</button>
            </div>
        </div> 
    </form> @endsection
