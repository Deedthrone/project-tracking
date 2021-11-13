@extends('layouts.main')

@section('home')

<!-- ISI -->

<div class="home">
    <div class="homecontent">
    @include('partials.navigbar')
        <h1>test</h1>
    </div>

{{--  --}}

<div class="container">
    <div class="home">

        <div class="homecontent">

            <h1>Page {{ $title }}</h1>
            <hr>

            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-xl-9 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-black">Data Katalog</h4>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart" width="100" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row mt-4">
                    <div class="col-xl-9 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-black">Data Pesanan</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-responsive" id="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Barang</th>
                                            <th scope="col">Pendapatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{date('Y-m-d')}}</td>
                                            <td>Otto</td>
                                            <td>Rp {{number_format(4000000, 0, ',', '.')}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>{{date('Y-m-d', strtotime(' -1 day'))}}</td>
                                            <td>Thornton</td>
                                            <td>Rp {{number_format(5000000, 0, ',', '.')}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>{{date('Y-m-d', strtotime(' -2 day'))}}</td>
                                            <td>the Bird</td>
                                            <td>Rp {{number_format(1000000, 0, ',', '.')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>







    
</div>

@endsection