@extends('layouts.base')

@section('pageTitle')
    home
@endsection

@section('pageContent')
    <div class="series">Current Series</div>
    <div class="container">
        <div class="card-container">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="">
                    <p>{{$comic['series']}}</p>
                </div>
            @endforeach
        </div>
    </div>

@endsection