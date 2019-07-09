@extends('layout/app')
@section('content')
<div class="container">
        <h3>Create Post</h3>
        {{ Form::open(['action' => 'PostController@store','method' => 'POST']) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body','',['class' => 'form-control', 'placeholder' => 'write your text'])}}
        </div>
        {{ Form::submit("Submit",['class' => 'btn btn-success']) }}
        {{ Form::close() }}      
</div>
{{-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script> --}}
@endsection