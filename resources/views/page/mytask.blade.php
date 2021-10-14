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
        <h1>sadas</h1>
        @include('partials.source-task') 
        
    </div>

@endsection
