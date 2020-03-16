{{-- {{dd($cds)}} --}}
@extends('layouts.app')

 @section('header')
    <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
     
 @endsection   
           
@section('content')
        <div class="cds-container">
            @foreach ($cds as $cd)
                <div class="cd">
                    <img src="{{$cd['imgpath']}}" alt="">
                    <h3>{{$cd['album']}}</h3>
                    <small>{{$cd['artist']}}</small>
                <strong>{{$cd['year']}}</strong>  
                </div>    
            @endforeach   
        </div>
@endsection