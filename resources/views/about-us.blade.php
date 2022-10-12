
@extends('layout.mainlayout')
@section('title', $title2)

@section('content')
<div class="ml-5 mt-5">
        <h1>ABOUT US</h1>
         <p>{{$nama}}</p>
         <p>{{$email}}</p>
         <p>{{$line}}</p>
</div>
@endsection