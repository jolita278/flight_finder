@extends('admin.adminBase')

@section('adminFormFlights')
<div class="container">

    <h2>{{$title}}</h2>

    {!! Form::open(['url' => route('app.flights.create')]) !!}
    <br>

    {{ Form::label('airline_id','Airline') }}
    {{ Form::select('airline_id',$airline_id) }}
    <br>
    <br>
    {{ Form::label('destination','Destination') }}
    {{ Form::select('destination',$destination) }}
    <br>
    {{ Form::label('origin','Origin') }}
    {{ Form::select('origin',$origin) }}
    <br>
    {{ Form::label('arival', 'Arrival date')}}<br>
    {{Form::text('arival')}}
    <br>
    {{ Form::label('depature', 'Depature date')}}<br>
    {{Form::text('depature')}}
    <br>

    <br>
    <br>

    {{ Form::submit('Save') }}

    {!! Form::close() !!}

</div>
@endsection
