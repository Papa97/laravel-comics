@extends('layouts.base')

@section('pageTitle')
    home
@endsection

@section('pageContent')
    <h1>home page</h1>
    @foreach ($comics as $comic)
     <div class="card">
         <img src="{{$comic['thumb']}}" alt="">
         {{$comic['series']}}
     </div>
    @endforeach
@endsection