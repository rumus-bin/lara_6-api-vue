@extends('layouts.app')
@section('content')
    <table-list-component :table-raws="{{$data}}"></table-list-component>
@endsection

