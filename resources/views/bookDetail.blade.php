@extends('template.template')

@section('head')

@endsection

@section('body')
    <div class="d-flex justify-content-center m-5">
        <div class="card" style="width: 50rem;">
            <img src="{{asset($book->image)}}" class="card-img-top" alt="...">

            <div class="card-body">
            <h5 class="card-title">Title: {{$book->title}}</h5>
            <h5>Author: {{$book->author}}</h5>
            <h5>Publisher: {{$book->publisher->name}}</h5>
            <h5>Year: {{$book->year}}</h5>
            <h5>Synopsis: {{$book->synopsis}}</h5>
            <h5>
                Genre:
                @foreach ($book->categories as $b)
                    {{$b->name}},
                @endforeach
            </h5>
            </div>
        </div>
    </div>
@endsection
