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
                <form method="POST" action="{{ route('trip_form_store') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="form-group col">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="form-group col">
                                <label for="date">From</label>
                                <select name="from" class="form-control">
                                    <option value="">Select Destination</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Cox's_bazaar">Cox's Bazaar</option>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="date">To</label>
                                <select name="to" class="form-control">
                                    <option value="">Select Destination</option>
                                    <option value="Dhaka">Dhaka</option>
                                    <option value="Comilla">Comilla</option>
                                    <option value="Chittagong">Chittagong</option>
                                    <option value="Cox's_bazaar">Cox's Bazaar</option>  
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="form-group col">
                                <label for="fare">Fare Amount</label>
                                <input type="number" name="fare" class="form-control">
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

