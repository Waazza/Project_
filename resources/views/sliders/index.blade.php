<a href="{{route('slides.create')}}"></a>
{{-- problème ici --}}

@foreach($sliders as $slider)
<img src="{{url('images')}}/{{$slider->photo}}" alt="{{$slider->title}}" width="250" height="150"> <br />
@endforeach
