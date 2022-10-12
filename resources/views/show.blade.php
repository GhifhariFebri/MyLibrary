@extends('layout.mainlayout')

@section('content')
<h1 class="text-center">{{$maintitle}}</h1>
<div class="d-flex justify-content-center">
    <div class="text-center show rounded-lg">
        <img src="/images/{{$writer ['image']}}" class="rounded-circle" width="110" height="130">
        <h2>{{$writer['name']}}</h2>
        <h2>{{$writer['contact']}}</h2>
    </div>
</div>
@endsection