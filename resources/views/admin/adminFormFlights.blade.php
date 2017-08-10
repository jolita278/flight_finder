@extends('admin.adminBase')

@section('adminFormFlights')
    <div class="container">

        <h2>{{$title}}</h2>
        @if(isset($item['id']))
            {!!Form::open(['url' => route($route, $item['id'])]) !!}
            <br>

            {{ Form::label('airline_id','Airline') }}
            {{ Form::select('airline_id', $airline_id, $item['airline_id'], ['class' => 'form-control', 'placeholder' => 'Please Select'])}}
            <br>
            <br>
            {{ Form::label('destination','Destination') }}
            {{ Form::select('destination', $destination, $item['destination'], ['class' => 'form-control', 'placeholder' => 'Please Select']) }}
            <br>
            {{ Form::label('origin','Origin') }}
            {{ Form::select('origin',$origin ,$item['origin'], ['class' => 'form-control', 'placeholder' => 'Please Select']) }}
            <br>

            {{ Form::label('depature', 'Departure date YYYY-MM-DD HH:SS')}}<br>
            {{Form::text('depature', $item['depature'], array('class' => 'form-control datetimepicker1', 'placeholder' => 'Select Date'))}}

            <br>
            {{ Form::label('arival', 'Arrival date YYYY-MM-DD HH:SS')}}<br>
            {{Form::text('arival', $item['arival'], array('class' => 'form-control datetimepicker1', 'placeholder' => 'Select Date'))}}

            <br>
        @else
            {!! Form::open(['url' => route($route)]) !!}
            <br>

            {{ Form::label('airline_id','Airline ') }}
            {{ Form::select('airline_id', $airline_id, null, ['class' => 'form-control', 'placeholder' => 'Please Select'])}}
            <br>
            <br>
            {{ Form::label('destination','Destination ') }}
            {{ Form::select('destination', $destination, null, ['class' => 'form-control', 'placeholder' => 'Please Select']) }}
            <br>
            {{ Form::label('origin','Origin') }}
            {{ Form::select('origin',$origin ,null, ['class' => 'form-control', 'placeholder' => 'Please Select']) }}
            <br>
            {{ Form::label('depature', 'Departure date YYYY-MM-DD HH:SS')}}<br>

            {{Form::text('depature', null, array('class' => 'form-control datetimepicker1'))}}
            <br>
            {{ Form::label('arival', 'Arrival date YYYY-MM-DD HH:SS')}}<br>

            {{--<div class="form-group">--}}
                {{--<div class='input-group date' id='datetimepicker1'>--}}
                    {{--<input type='text' class="form-control" />--}}
                    {{--<span class="input-group-addon">--}}
                        {{--<span class="glyphicon glyphicon-calendar"></span>--}}
                    {{--</span>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{Form::text('arival', null, array('class' => 'form-control datetimepicker1'))}}
            <br>


        @endif
        {{ Form::submit('Save', ['class' => 'btn']) }}

        {!! Form::close() !!}

    </div>

@endsection
@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('.datetimepicker1').datetimepicker({
                locale: 'lt'
            });
        });


    </script>
@endsection

