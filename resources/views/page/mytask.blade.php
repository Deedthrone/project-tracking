@extends('layouts.task-layout')

@section('mytask')

<!-- Variable -->

<?php

$taskfield = 4;
$partask = 2;
$subtask = 2;

?>

<!-- ISI -->
@include('partials.navbar') 
    <div class="homecontent">

        @include('partials.source-task') 
 
    </div>

@endsection
