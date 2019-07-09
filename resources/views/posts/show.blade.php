@extends('layout/app');
@section('content')
<div class="container">
    <h1>{{$posts->title}}</h1>
    <p>written on {{$posts->created_at}}</p>
    <div>
        {{$posts->body}}
    </div>
    <br>
    <a href="/firstApp/public/post" class="btn btn-success">Go Back</a>
    {{-- <br> --}}
    {{-- <a href="" class="btn btn-primary">Edit</a> --}}
</div>
@endsection