@extends('layouts.app')

@section('content')
    <h1>Edit Posts</h1>
    {!! Form::open(['action' => ['SongsController@update', $song->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $song->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('artist', 'Artist')}}
            {{Form::text('artist', $song->artist, ['class' => 'form-control', 'placeholder' => 'Artist'])}}
            </div>
        <div class="form-group">
            {{Form::label('lyrics', 'Lyrics')}}
            {{Form::textarea('lyrics', $song->lyrics, ['class' => 'form-control', 'placeholder' => 'Lyrics Text'])}}
        </div>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
