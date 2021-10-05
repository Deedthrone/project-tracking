@extends('layouts.task-layout')

@section('mytask')

<!-- Variable -->

<?php

$taskfield = 4;

?>

<!-- ISI -->
<div class="home">
@include('partials.navbar') 
    <div class="homecontent">

        <?php for($i = 0 ; $i < $taskfield ; $i++) : ?>
            
            <!-- SOURCE TASK -->
            <div class="taskfield">
                <ul>
                    <li>
                        Do Today
                    </li>
                    <li>
                        <i class='bx bx-plus bx-md bx-tada'></i>
                    </li>
                    <li>
                    <i class='bx bx-dots-horizontal-rounded bx-tada'></i>
                    </li>
                </ul>

                <div class="alltask">

                </div>
            </div>

        <?php endfor; ?>
</div>

@endsection
