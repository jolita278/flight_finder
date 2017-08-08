@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" id="menu">
                        <ul>
                            <a href="{{ url('/admin/airlines/')}}">Airlines</a><br>
                            <a href="{{ url('/admin/airports/')}}">Airports</a><br>
                            <a href="{{ url('/admin/flights/')}}">Flights</a><br>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
