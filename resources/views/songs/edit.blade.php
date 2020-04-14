@extends('layouts.app')

@section('content')
    <h1>Edit Song</h1>
    {!! Form::open(['action' => ['SongsController@update', $Song->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $Song->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('artist', 'Artist')}}
            {{Form::text('artist', $Song->artist, ['class' => 'form-control', 'placeholder' => 'Artist'])}}
            </div>
        <div class="form-group">
            {{Form::label('lyrics', 'Lyrics')}}
            {{Form::textarea('lyrics', $Song->lyrics, ['class' => 'form-control', 'placeholder' => 'Lyrics Text'])}}
        </div>

        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
