@extends('layouts.task-layout')

@section('mytask')

<!-- Variable -->

<?php

$taskfield = 4;
$partask = 2;
$subtask = 2;

?>

<!-- ISI -->

    <div class="homecontent">
    @include('partials.navigbar')

        @include('partials.backlog')
        
        @include('partials.source-task') 
        
    </div>

@endsection
