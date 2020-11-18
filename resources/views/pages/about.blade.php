@extends("default")

@section('content')

  <div class="container mt-5">
    <h2>{{ $title }}</h2>

    @foreach($numbers as $nb)
      <p> {{ $nb }} </p>
    @endforeach
    
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt aspernatur illum nihil accusamus ullam exercitationem placeat modi unde facilis tenetur?</p>
  </div>
  
@endsection
