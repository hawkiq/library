@if (count($book) > 0)
@extends('layouts.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Book name</div>

        <div class="panel-body">
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
                    <a href="" class="btn btn-info">More info</a>
                </div>
                <!-- /.col-md-9 -->
            </div>
        </div>
    </div>
<hr>
    @include('commentbox')
@endsection
@else
    Error No Book found
@endif
