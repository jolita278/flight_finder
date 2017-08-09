@extends('admin.adminBase')

@section('adminFormAirports')
    <div class="container">

        <h2>{{$title}}</h2>
        @if(isset($item['id']))
            {!!Form::open(['url' => route($route, $item['id'])]) !!}
            <br>
            {{ Form::label('id', 'Custom airport code')}}
            {{Form::text('id',$item['id'], ['class' => 'form-control'])}}

            <br>
            {{ Form::label('name', 'Airport name')}}<br>
            {{Form::text('name', $item['name'], ['class' => 'form-control'])}}
            <br>
            {{ Form::label('country_id','Country') }}
            {{ Form::select('country_id',$country ,$item['country_id'], ['class' => 'form-control', 'placeholder' => 'Please Select']) }}

            <br>
            {{ Form::label('city', 'City')}}<br>
            {{Form::text('city' ,$item['city'], ['class' => 'form-control'])}}

        @else
            {!! Form::open([$route]) !!}
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
        @endif
        <br>
        <br>

        {{ Form::submit('Save', ['class' => 'btn']) }}

        {!! Form::close() !!}

    </div>
@endsection
