@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <br>
                    Create your blog!
                    <br>
                    <a href="post/create" class="btn btn-primary">start</a>
                    <br>
                    @if (count($post))
                    <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($post as $item)
                                <tr>
                                    <th>{{$item->title}}</th>
                                <th><a href="post/{{$item->id}}/edit" class="btn btn-dark">Edit</a></th>
                                    <th></th>
                                </tr>
                                
                            @endforeach
                        </table>
                        @else
                        <hr>
                            <p>you have no posts yet</p>
                        
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
