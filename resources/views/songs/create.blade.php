@extends('layouts.app')

@section('content')
    <h1>Create Song Lyrics</h1>
    {!! Form::open(['action' => 'SongsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('artist', 'Artist')}}
            {{Form::text('artist', '', ['class' => 'form-control', 'placeholder' => 'Artist Text'])}}
        </div>
        <div class="form-group">
            {{Form::label('lyrics', 'Lyrics')}}
            {{Form::textarea('lyrics', '', ['class' => 'form-control', 'placeholder' => 'Lyrics Text'])}}
        </div>

        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection

