@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{route('table.store')}}">
            @csrf
            <div class="form-group">
                <label for="table_first">First</label>
                <input
                    type="text"
                    class="form-control"
                    id="table_first" placeholder="Enter first"
                    name="first"
                    value="{{old('first')}}"
                >
{{--                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>--}}
            </div>
            <div class="form-group">
                <label for="table_last">Last</label>
                <input
                    type="text"
                    class="form-control"
                    id="table_last"
                    placeholder="Password"
                    name="last"
                    value="{{old('handle')}}"
                >
            </div>
            <div class="form-group">
                <label for="table_handle">Handle</label>
                <input type="text"
                       class="form-control"
                       id="table_handle"
                       placeholder="Password"
                        name="handle"
                       value="{{old('last')}}"
                >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

