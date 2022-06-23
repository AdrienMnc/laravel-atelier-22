@extends("layouts.app")


    
    
@section("title")
Series
@endsection
   
@section("content")

    <h1> HERE:</h1>
    <p> {{ $serieVariable }}, {{$id}} </p>
    <a href="{{ route('series.index') }}">Back</a>

@endsection



