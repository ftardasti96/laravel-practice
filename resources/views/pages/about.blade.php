{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>About</h1>
    <p>this is about us page</p>
</body>
</html> --}}
@extends('layout/app')

@section('content')
<div class="container">
        <h1>About</h1>
        <p>this is about us page</p>   
        <p>my name is {{$myName}} {{$myLastName}}</p> 
        
</div>
@endsection