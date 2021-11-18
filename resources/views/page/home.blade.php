@extends('layouts.main')

@section('home')

<!-- ISI -->

<div class="home">
@include('partials.navigbar')

<h1>All Project</h1>

@php
 
 $add = 1;

@endphp

@foreach ($projects as $project)

    @if ( $add === 1 )
    <div class="hubox">
        <a href="">
            <div class="huaddnew">
                <p>+</p>
            </div>
        </a>
        <div class="clear"></div>
    <p>asdas</p>
    </div>



        @php

        $x = 0;

        @endphp
        

        @else


        @endif

        <div class="hucontainer">
            
            
        
        </div>

@endforeach
    
</div>

@endsection
