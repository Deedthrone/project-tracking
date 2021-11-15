@extends('layouts.main')

@section('home')

<!-- ISI -->

<div class="home">
    <div class="homecontent">
    @include('partials.navigbar')
        


        @@foreach ($projects as $project)
            <div class="containier">
                <div class="row">
                    
                </div>
            </div>
        @endforeach






    </div>
    
</div>

@endsection
