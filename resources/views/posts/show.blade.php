@extends('layouts/app');
@section('content')
<div class="container">
    <h1>{{$post->title}}</h1>
    <p>written on {{$post->created_at}}</p>
    <div>
        {{$post->body}}
    </div>
    <br>
    <a href="/firstApp/public/post" class="btn btn-success">Go Back</a>
    {{-- <br> --}}
    <a href="/firstApp/public/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    {{ Form::open(['action' => ['PostController@destroy' , '$post->id'], 'method' => 'POST', 'class' => 'float-right'])}}
        {{ Form::hidden('_method', 'DELETE')}}
        {{ Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {{ Form::close()}}
</div>
@endsection