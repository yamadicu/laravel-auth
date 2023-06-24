@extends('layouts.app')

@section('title')
    Mattia's Project | Index
@endsection

@section('content')
    <h1>Pagina Iniziale</h1>

    <div class="row">
    @foreach ($project as $elem)

        <div class="card m-4 col-2">
            <img class="card-img-top" src="holder.js/100x180/" alt="Title">
            <div class="card-body">
                <a href="{{url('pages/show', $elem)}}">
                    <h4>{{$elem->title}}</h4>
                </a>
                <p class="card-text">progetto numero: {{$elem->id}}</p>
                <p class="card-text">{{$elem->content}}</p>
            </div>
        </div>

        @endforeach
    </div>

@endsection