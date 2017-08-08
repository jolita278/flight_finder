@extends('admin.adminBase')

@section('adminFormAirlines')
    <div class="container">

        <h2>{{$title}}</h2>

        {!! Form::open(['url' => route('app.airlines.create')]) !!}
        <br>

        {{ Form::label('name', 'Airline name')}}<br>
        {{Form::text('name')}}

        <br>
        <br>

        {{ Form::submit('Save') }}

        {!! Form::close() !!}

    </div>
@endsection
