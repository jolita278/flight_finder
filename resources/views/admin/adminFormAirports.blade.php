@extends('admin.adminBase')

@section('adminFormAirports')
    <div class="container">

        <h2>{{$title}}</h2>

        {!! Form::open(['url' => route('app.airports.create')]) !!}
        <br>
        {{ Form::label('id', 'Custom airport code')}}<br>
        {{Form::text('id')}}
        <br>
        {{ Form::label('name', 'Airport name')}}<br>
        {{Form::text('name')}}
        <br>
        {{ Form::label('country_id','Country') }}
        {{ Form::select('country_id',$country) }}
        <br>
        {{ Form::label('city', 'City')}}<br>
        {{Form::text('city')}}
        <br>

        <br>
        <br>

        {{ Form::submit('Save') }}

        {!! Form::close() !!}

    </div>
@endsection
