@extends('countries.layout')
@section('content')
<div class="card">
    <div class="card-header">Update Country</div>
    <div class="card-body">
        @if ( !empty( $country ) )
            <form action="{{ url('update') }}" method="post">
                @csrf
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$country->Name}}" class="form-control" required></br>
                <label>ISO</label></br>
                <input type="text" name="iso" id="iso" value="{{$country->ISO}}" class="form-control" required></br>
                <input type="hidden" name="id" value="{{$country->id}}">
                <div>
                    <input type="submit" value="Update" class="btn btn-dark"></br>
                </div>
            </form>
        @else
            <p>This id doesnot exist.</p>
        @endif
    </div>
</div>
@stop