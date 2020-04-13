@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($songs) > 0)
        @foreach($songs as $song)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 35%;" src="/storage/songplaceholder.png">
                    </div>

                    <div class="col-md-8 col-sm-8">
                    <h3><a href="/songs/{{$song->id}}">{{$song->title}} - by {{$song->artist}}</a></h3>
                        <small>Writen on {{$song->created_at}} by {{$song->user->name}}</small>
                    </div>

                </div>

            </div>
        @endforeach
        {{$songs->links()}}
    @else
        <p>No songs found</p>
    @endif
@endsection
