@extends('layouts.app')

@section('content')
    <h1>{{$Song->artist}} - {{$Song->title}}</h1>

    <div>
        {{$Song->lyrics}}
    </div>
    <hr>
    <a href="/songs/{{$Song->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['SongsController@destroy', $Song->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection
