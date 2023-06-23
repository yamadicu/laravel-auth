@extends('layouts.app')

@section('title')
    Mattia's Project | Index
@endsection

@section('content')
    <h1>Pagina Iniziale</h1>

    <div class="row">
    @foreach ($projects as $elem)

        <div class="card m-4 col-2">
            <img class="card-img-top" src="holder.js/100x180/" alt="Title">
            <div class="card-body">
                <h4 class="card-title">{{$elem->title}}</h4>
                <p class="card-text">progetto numero: {{$elem->id}}</p>
                <p class="card-text">{{$elem->content}}</p>
            </div>
        </div>

        @endforeach
    </div>

@endsection