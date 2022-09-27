@extends('layout.app')

@section('page-title', 'Comics')

@section('content')
<div class="container">
    <span class="current-series fw-bold">CURRENT SERIES</span>
    <div class="comics-list p-3">
        @foreach ($comics as $comic)
            <div class="comic-card">
                <img src="{{$comic['thumb']}}" />
                <h6 class="text-white py-1">{{$comic['series']}}</h6>
            </div>
        @endforeach
    </div>
    <span class="load-more fw-bold">LOAD MORE</span>
</div>
@endsection
