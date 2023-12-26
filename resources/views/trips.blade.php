@extends('layout.app')

@section('content')

<div class="container">
<h3>trips List</h3>
<hr>
    <div class=container>
        <div class="row w-25 m-t-1">
            <a href="{{ route('trip_form') }}"><button class="btn btn-primary" > Add Trip</button></a>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>From</th>
                        <th>To</th>
                        <th>Fare Amount</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        @foreach( $trips as $trip)
                        <tr>
                            <td>{{ $trip->from }}</td>
                            <td>{{ $trip->to }}</td>
                            <td>{{ $trip->fare }}</td>
                            <td>{{ date('d-m-Y', strtotime($trip->date)) }}</td>
                            <td>
                                <a href="{{ route('delete_trip', $trip->id  ) }}"><button class="btn btn-primary" >Delete</button></a>                              
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>


@endsection
