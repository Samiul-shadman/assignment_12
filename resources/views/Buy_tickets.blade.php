@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row">

        </div>
        
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h2>Check Tickets</h2>
                </div>
                <form method="POST" action="{{ route('buy_ticket_store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="form-group col">
                                <label for="date">Date</label>
                                <input type="hidden" value="{{ $trip->id }}">
                                <input type="date" name="date" class="form-control" readonly value="{{ $trip->date }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col">
                                <label for="from">From</label>
                                <input type="text" name="from" class="form-control" readonly value="{{ $trip->from }}">
                            </div>
                            <div class="form-group col">
                                <label for="to">To</label>
                                <input type="text" name="to" class="form-control" readonly value="{{ $trip->to }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col-3">
                                <label for="seat">Seats</label>
                                <select name="seat" id="" class="form-control">
                                @for ($i = 1; $i < 37; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor                                    
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>        
    </div>

@endsection

