@extends('layouts.master')
@section('content')

  <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

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

{{--    @foreach($sliders->animals as $slider)--}}
{{--    <div id="animal-carousel"class="carousel-item active">--}}
{{--      <div id="animal-column" class="col-12 col-md-4 ">--}}
{{--        <div id="animal-card" class="card mb-4" >--}}
{{--          <img class="card-img-top" src="{{ $animals->picture }}" alt="">--}}
{{--          <div id="animal-card-content" class="card-body">--}}
{{--            <h4 id="animals-carousel-name" class="card-title font-weight-bold" {{ $animals->name }}></h4>--}}
{{--            <p id="animals-carousel-type" class="card-text {{ $animals->type }}"></p>--}}
{{--            <p id="animals-carousel-comment" class="card-text {{ $animals->comment }}"></p>--}}
{{--              <span class="lost-date"> {{ $animals->timestamp }}</span>--}}
{{--            <a href=" {{ route('card') }}"class="btn btn-primary btn-md btn-rounded animal-btn-expand">Regarder cet animal</a>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  @endforeach--}}
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
  </div>
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


@endsection
