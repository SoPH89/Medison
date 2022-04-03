@extends('countries.layout')
@section('content')
<div class="card">
    <div class="card-header">Add New Country</div>
    <div class="card-body">

        <form action="{{ url('store') }}" method="post">
            @csrf
            <label>Name</label></br>
            <input type="text" name="name" id="name" class="form-control" required></br>
            <label>ISO</label></br>
            <input type="text" name="iso" id="iso" class="form-control" required></br>
            <div>
                <input type="submit" value="Save" class="btn btn-dark"></br>
            </div>
        </form>
    </div>
</div>
@stop