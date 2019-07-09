@extends('layouts/app')
@section('content')
<div class="container">
        <h3>Edit Post</h3>
        {{ Form::open(['action' => ['PostController@update', '$posts->id'],'method' => 'PUT']) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title',$posts->title,['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{ Form::label('body', 'Body') }}
                {{ Form::textarea('body',$posts->body,['id' => 'summary-ckeditor', 'name' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'write your text'])}}
        </div>
        {{ Form::hidden('_method','PUT')}}
        {{ Form::submit("Submit",['class' => 'btn btn-success']) }}
        {{ Form::close() }}      
</div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'summary-ckeditor' );
</script>
@endsection