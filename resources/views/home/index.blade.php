@extends('layouts.master')
@section('content')

  <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
<<<<<<< Updated upstream

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#carousel-example-multi" data-slide="prev">
      <i class="fa fa-chevron-circle-left"></i></a>
    <a class="btn-floating" href="#carousel-example-multi" data-slide="next">
      <i class="fa fa-chevron-circle-right"></i></a>
  </div>
  <!--/.Controls-->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-multi" data-slide-to="1"></li>
    <li data-target="#carousel-example-multi" data-slide-to="2"></li>
    <li data-target="#carousel-example-multi" data-slide-to="3"></li>
    <li data-target="#carousel-example-multi" data-slide-to="4"></li>
    <li data-target="#carousel-example-multi" data-slide-to="5"></li>
  </ol>
  <!--/.Indicators-->
<div class="container">
  <div class="carousel-inner v-2" role="listbox">

    @foreach($sliders->animals as $slider)
    <div class="carousel-item active">
      <div class="col-12 col-md-4">
        <div class="card mb-4" >
          <img class="card-img-top" src="{{ $animals->picture }}" alt="">
          <div class="card-body">
            <h4 class="card-title font-weight-bold" {{ $animals->name }}></h4>
            <p class="card-text {{ $animals->type }}"></p>
            <p class="card-text {{ $animals->comment }}"></p>
              <span> {{ $animals->timestamp }}</span>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
  @endforeach
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (34).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-4">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (38).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (29).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (30).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="col-12 col-md-4">
        <div class="card mb-2">
          <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/img (27).jpg"
            alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title font-weight-bold">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary btn-md btn-rounded">Button</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 lost-pets">
      <button type="button" class="btn">Animaux Perdus<a href="#"></a></button>
    </div>
    <div class="col-lg-6 found-pets">
      <button type="button" class="btn">Animaux Trouvés<a href="#"></a></button>
    </div>
  </div>
</div>

=======
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-multi" data-slide-to="1"></li>
        <li data-target="#carousel-example-multi" data-slide-to="2"></li>
      </ol>

  <div class="container">
    <div class="carousel-inner v-2" role="listbox">
      @foreach($sliders as $animals)
        <div id="animal-carousel"class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <div id="animal-column" class="col-12 col-md-4 ">
            <div id="animal-card" class="card mb-4" >
              <img class="card-img-top img-responsive" src="{{ $animals->picture }}" alt="">
              <div id="animal-card-content" class="card-body">
                <h4 id="animals-carousel-name" class="card-title font-weight-bold " >{{ $animals->name }}</h4>
                <p id="animals-carousel-comment" class="card-text"> {{ $animals->race_id_fk }}</p>
                <p id="animals-carousel-comment" class="card-text ">{{ $animals->comment }}</p>
                <span class="AnimalStatus"> {{ $animals->status_id_fk }}</span>
                <a href="{{ route('card') }}" class="btn btn-primary btn-md btn-rounded animal-btn-expand">Regarder cet animal</a>
              </div>
             </div>
            </div>
          </div>
      @endforeach


        </div>
      </div>

      <div class="controls-top">
        <a class="btn-floating" href="#carousel-example-multi" data-slide="prev">
          <i class="fa fa-chevron-circle-left"></i></a>
        <a class="btn-floating" href="#carousel-example-multi" data-slide="next">
          <i class="fa fa-chevron-circle-right"></i></a>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-6 lost-pets">
          <a class="btn" href="{{ route('list') }}">Animaux Perdus </a>
        </div>
        <div class="col-lg-6 found-pets">
          <a class="btn" href="{{ route('list') }}">Animaux Trouvés </a>
        </div>
      </div>
    </div>
>>>>>>> Stashed changes

@endsection
