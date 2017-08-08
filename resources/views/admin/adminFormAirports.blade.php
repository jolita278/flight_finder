@extends('admin.adminBase')

@section('adminFormAirports')
    <div class="container">

        <h2>{{$title}}</h2>

        {!! Form::open(['url' => route('app.airports.create')]) !!}
        <br>
        <div class="form-group">
        {{ Form::label('id', 'Custom airport code', ['class' => 'col-lg-2 control-label'])}}
            <div class="col-lg-10">
        {{Form::text('id')}}
            </div>
        </div>
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
