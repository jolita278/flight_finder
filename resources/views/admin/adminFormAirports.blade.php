@extends('admin.adminBase')

@section('adminFormAirports')
    <div class="container">

        <h2>{{$title}}</h2>

        {!! Form::open(['url' => route('app.airports.create')]) !!}
        <br>
        {{ Form::label('id', 'Custom airport code')}}
        {{Form::text('id',null, ['class' => 'form-control'])}}

        <br>
        {{ Form::label('name', 'Airport name')}}<br>
        {{Form::text('name', null, ['class' => 'form-control'])}}
        <br>
        {{ Form::label('country_id','Country') }}
        {{ Form::select('country_id',$country ,null, ['class' => 'form-control', 'placeholder' => 'Please Select']) }}

        <br>
        {{ Form::label('city', 'City')}}<br>
        {{Form::text('city' ,null, ['class' => 'form-control'])}}
        <br>

        {{ Form::submit('Save', ['class' => 'btn']) }}

        {!! Form::close() !!}

    </div>
@endsection
