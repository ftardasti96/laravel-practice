@extends('layouts/app')
@section('content')
<div class="container">
    <h1>posts</h1>
    @if (count($posts))
        @foreach ($posts as $item)
        <div class="card card-body bg-light">
            <h3><a href="post/{{$item->id}}">{{$item->title}}</a></h3>
            <p>{{$item->body}}</p>
            <p>updated at: {{$item->updated_at}}</p>
        </div>
        @endforeach
        <br>
        {{-- {{$posts->links()}} --}}
    @else
        <p>no posts found</p>
    @endif
</div>
@endsection