@extends('layouts.app')
@section('content')
{{--    <example-component></example-component>--}}
<div class="row m-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Line chart</h2>
                <line-chart-component></line-chart-component>
            </div>
        </div>
    </div>
</div>
<div class="row m-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Pie chart</h2>
                <pie-chart-component></pie-chart-component>
            </div>
        </div>
    </div>
</div>
<div class="row m-2">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h2 class="text-center">Line chart random</h2>
                <line-chart-random-component></line-chart-random-component>
            </div>
        </div>
    </div>
</div>

@endsection
