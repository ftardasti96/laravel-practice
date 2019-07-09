{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>service</h1>
    <p>this is service page</p>
</body>
</html> --}}
@extends('layout/app')

@section('content')
<div class="container">
    <h1>service</h1>
    <p>this is service page</p>
    <p>{{$title}} Company</p>
    @if (count($services))
    <ul class="list-group">
        @foreach ($services as $item)
            <li class="list-group-item">{{$item}}</li>
        @endforeach
    </ul>
    @endif

</div>
@endsection