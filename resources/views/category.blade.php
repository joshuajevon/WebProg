@extends('template.template')


@section('head')

@endsection

@section('body')
<div class="d-flex justify-content-center bg-secondary text-white">
    <h1>Book ListCategory</h1>
</div>

<div class="d-flex flex-row m-5 justify-content-center">
    @foreach ($bookCats as $book)
    <div class="m-3">
        <div class="card" style="width: 18rem;">
            <img src="{{asset($book->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$book->title}}</h5>
              <p class="card-text">by</p>
              <h5>{{$book->author}}</h5>
              <a href="{{route('bookById', $book->id)}}" class="btn btn-primary">Detail</a>
            </div>
          </div>
    </div>
    @endforeach
</div>
@endsection
