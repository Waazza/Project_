{{ Form::open(array('route' => 'slides.store', 'files' => true)) }}
{{-- le true permet d'uploader les photos via le formulaire --}}
  {{ Form::label('title', 'Title') }}

  {{ Form::text('title', null, array('class' => 'form-control')) }}


  {{ Form::label('photo', 'Photo') }}

  {{ Form::file('photo', array('class' => 'form-control')) }}


  {{ Form::submit('Add', array('class' => 'pull-right btn btn-primary')) }}

{{ Form::close() }}
