@extends('template.template')

@section('head')

@endsection

@section('body')
<div class="d-flex flex-column m-5">
    @foreach ($publisher as $pub)
    <h1>Publisher</h1>
        <div class="m-3">
            {{-- <img src="{{asset($pub->image)}}" class="card-img-top" alt="..."> --}}
            <div class="bg-secondary text-white p-5">
              <h5 class="card-title">{{$pub->name}}</h5>
              <h5 class="card-title">Address - {{$pub->address}}</h5>
              <h5 class="card-title">Phone - {{$pub->phone}}</h5>
              <h5 class="card-title">Email - {{$pub->email}}</h5>
            </div>
        </div>

        <h1>Books:</h1>
        <div class="d-flex flex-row gap-5 justify-content-center ">
        @foreach ($pub->books as $book)
                <div class="card" style="width: 18rem;">
                    <img src="{{asset($book->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p class="card-text">by</p>
                    <h5>{{$book->author}}</h5>
                    <a href="{{route('bookById', $book->id)}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
          <h1>=============================================================</h1>
    @endforeach
</div>
@endsection
