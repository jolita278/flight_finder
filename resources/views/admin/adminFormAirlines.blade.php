@extends('admin.adminBase')

@section('adminFormAirlines')
    <div class="container">

        <h2>{{$title}}</h2>

        {!! Form::open(['url' => route('app.airlines.create')]) !!}
        <br>

        {{ Form::label('name', 'Airline name')}}<br>
        {{Form::text('name',null, ['class' => 'form-control'])}}

        <br>
        <br>

        {{ Form::submit('Save', ['class' => 'btn']) }}

        {!! Form::close() !!}

    </div>
@endsection
