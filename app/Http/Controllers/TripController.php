<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{

    //BUY
    public function index(){
        return view('Buy');
    }

    public function buy_ticket($id){
        $trip = Trip::find($id);
        return view('Buy_tickets', ['trip'=>$trip]);
    }

    public function buy_ticket_store(Request $request){
        return $request;
    }


    //check
    public function check_form(){
        return view('Check');
    }

    public function check_seat(Request $request){
        $trips = Trip::whereDate('date',$request->date)
        ->with('seat')
        ->get();

        return view('Check_results', ['trips' => $trips]);
        //return $trips;
        //return $request;
    }



    //Trip Manage

    public function trips(){
        $trips=Trip::get();
        return view('trips',['trips'=>$trips]);
    }


    public function trip_form(){
        return view('tripForm');
    }


    public function trip_form_store(Request $request){
        Trip::create($request->input());
        return redirect('trips');
    }

    public function delete_trip($id){
        Trip::where('id', $id)
        ->delete();

        return redirect('trips');
    }



    //DETAILS

    public function details(){
        return view('Details');
    }
}
