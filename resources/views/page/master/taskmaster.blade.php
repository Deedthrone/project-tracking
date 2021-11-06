@extends('layouts.task-layout')

@section('mytask')

<!-- ISI -->

    <div class="homecontent">
    @include('partials.navigbar')

        @include('partials.backlog')
            <div class="pencarian">
            <h4>Search</h4>
                <form action="" method="post">
                    <ul>   
                        <li>
                        <select name="cars" id="cars">
                            <option value="volvo">Date</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                        </li>
                        <li>
                            <input type="text" placeholder="searchby">
                        </li>
                    </ul>
                </form>
            </div>
        @include('partials.source-task') 
        
    </div>

@endsection
