@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">{{$category->name}}</div>

        <div class="panel-body">
            @if (count($books) > 0)
                @foreach($books as $book)
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('storage/thumbnails/'.$book->image)}}" class="img-responsive"/>
                        </div>
                        <!-- /.col-md-12 -->
                        <div class="col-md-9 text-center">
                            <h2>{{$book->title}}</h2>
                            <p>{{$book->info}}</p>
                            <br/>
                            Author : {{$book->author}} <br/>
                            <a href="{{asset('storage/books/'.$book->bookfile)}}" class="btn btn-primary">Download</a>
                        </div>
                        <!-- /.col-md-9 -->
                    </div>
                    <hr>
                    @endforeach
                @endif
        </div>
    </div>

@endsection
