@extends('admin.adminBase')

@section('adminList')
    <div id="list">
        <div class="container">

            <h2> {{$title}}</h2>

            <table class="table table-hover">
                @if(isset($new))
                    <a href="{{$new}}" class="btn btn-primary" role="button">
                        New</a>
                    <hr/>
                @endif
                @if(sizeof($list)>0)
                    <thead>
                    <tr>
                        @foreach($list[0] as $key => $value)
                            <th>{{$key}}</th>
                        @endforeach

                    </tr>

                    </thead>
                    <tbody>
                    @foreach ($list as $key => $record)

                        <tr id="{{$record['id']}}">

                            @foreach ($record as $key => $value)

                                <td>
                                    @if($key == 'country')

                                        {{$value['original_name']}}

                                    @elseif($key == 'airline')

                                        {{$value['name']}}

                                    @elseif($key == 'airline')

                                        {{$value['name']}}

                                    @elseif($key == 'origin_airport')

                                       {{$value['name']}} {{'('}} {{$value['id']}} {{')'}} {{$value['city']}}

                                    @elseif($key == 'destination_airport')

                                        {{$value['name']}} {{'('}} {{$value['id']}} {{')'}} {{$value['city']}}

                                    @else

                                        {{$value}}

                                    @endif

                                </td>
                            @endforeach

                            @if(isset($edit))

                                <td><a href="{{route($edit, [$record['id'], app()->getLocale()])}}"
                                       class="btn btn-default btn-sm">{{'EDIT'}}</a>
                                </td>
                            @endif
                            @if(isset($showDelete))

                                <td><a onclick="deleteItem('{{route($showDelete, $record['id'])}}')"
                                       class="btn btn-info btn-sm">{{trans('DELETE')}}</a>
                                </td>
                            @endif

                        </tr>

                    @endforeach

                    </tbody>
                @else
                    <h2>No items in database!</h2>
                @endif
            </table>
        </div>
    </div>
@endsection

@section('scripts')

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteItem(route) {
            $.ajax({
                url: route,
                dataType: 'json',
                type: 'DELETE',
                success: function () {
                    alert('DELETED');
                    location.reload();
                },
                error: function () {
                    alert('ERROR');
                }
            });
        }

    </script>

@endsection
