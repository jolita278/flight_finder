@extends('admin.adminBase')

@section('adminFormAirlines')
    <div class="container">

        <h2>{{$title}}</h2>

        @if(isset($item['id']))

            {!!Form::open(['url' => route($route, $item['id'])]) !!}
            <br>

            {{ Form::label('name', 'Airline name')}}<br>
            {{Form::text('name',$item['name'], ['class' => 'form-control'])}}

        @else
            {!! Form::open([$route]) !!}

        <br>

        {{ Form::label('name', 'Airline name')}}<br>
        {{Form::text('name',null, ['class' => 'form-control'])}}
        @endif
        <br>
        <br>

        {{ Form::submit('Save', ['class' => 'btn']) }}

        {!! Form::close() !!}

    </div>
@endsection
