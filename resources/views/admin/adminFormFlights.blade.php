@extends('admin.adminBase')

@section('adminFormFlights')
    <div class="container">

        <h2>{{$title}}</h2>

        {!! Form::open(['url' => route('app.flights.create')]) !!}
        <br>

        {{ Form::label('airline_id','Airline') }}
        {{ Form::select('airline_id', $airline_id, null, ['class' => 'form-control', 'placeholder' => 'Please Select'])}}
        <br>
        <br>
        {{ Form::label('destination','Destination') }}
        {{ Form::select('destination', $destination, null, ['class' => 'form-control', 'placeholder' => 'Please Select']) }}
        <br>
        {{ Form::label('origin','Origin') }}
        {{ Form::select('origin',$origin ,null, ['class' => 'form-control', 'placeholder' => 'Please Select']) }}
        <br>

        {{ Form::label('depature', 'Departure date')}}<br>
        {{Form::text('depature', null, array('class' => 'form-control datepicker','placeholder' => 'Select Date'))}}
        <br>
        {{ Form::label('arival', 'Arrival date')}}<br>
        {{Form::text('arival', null, array('class' => 'form-control datepicker','placeholder' => 'Select Date'))}}
        <br>


        <br>

        {{ Form::submit('Save', ['class' => 'btn']) }}

        {!! Form::close() !!}

    </div>

@endsection
@section('scripts')
<script>
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
</script>

@endsection

