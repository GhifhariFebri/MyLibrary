@extends('layout.mainlayout')
@section('title')

@section('content')
      <h1>Hello, This page if for Writers</h1>
      @php
        for($j=0; $j < count($writers); $j++){
            if($j+1 == 1){
                $country[$j] = 'Lebanon';
            } elseif($j+1 == count($writers)){
                $country[$j] = 'Brunei';
            } elseif($j+1 == count($writers)/2){
                $country[$j] = 'Indonesia';
            
            } else{
                if(($j+1) % 2 == 0){
                    $country[$j] = 'Prancis';
                } else{
                    $country[$j] = 'Rusia'; 
                }
            }
        }
      @endphp
    <table class="table text-center">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Country</th>
            <th scope="col">Description</th>
            <th scope="col">Contact</th>
            <th scope="col">Photo</th>
            </tr>
        </thead>
        <tbody>
            @php($i=0)
            @php($k=0)
            @foreach ($writers as $wr)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td><a href="/writer/{{$wr['id']}}">{{$wr['name']}}</td>
            <td>{{$country[$i]}}</td>
            <td>
                @if ($loop->first)
                Urutan Teratas
                @elseif ($loop->last)
                Urutan Terbawah
                @elseif($loop->iteration == $loop->count/2)
                Urutan Tengah
                @elseif($loop->even)
                Urutan Genap
                @elseif($loop->odd)
                Urutan Ganjil
                @endif
            </td>
            <td>
                    {{$wr['contact']}}
            </td>
            <td>
                <img src="/images/{{$wr ['image']}}" class="mx-auto d-block rounded-3" width="110" height="130" >
            </td>
            </tr>
            <!-- @php($i++) -->
            @endforeach
        </tbody>
    </table>
@endsection