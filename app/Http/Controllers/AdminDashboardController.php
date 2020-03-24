<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trips;

class AdminDashboardController extends Controller
{

	public function store(Request $request) {
        $trip = new Trips;
        $trip->trip_name = $request->tripname;
        $trip->start_date = $request->tripsdate;
        $trip->end_date = $request->tripedate;
        $trip->description = $request->tripdesc;
        $trip->price = $request->tripprice;
        $trip->number_of_seats = $request->tripseats;
        if (isset($request->tripfonly)) {
        $trip->female_only = '1';            
        }
        else {
        $trip->female_only = '0';
        }
        $trip->save();
        return redirect('/admindashboard');
	}

	public function update(Request $request, $id) {
        $trip = Trips::find($id);
        $trip->trip_name = $request->tripname;
        $trip->start_date = $request->tripsdate;
        $trip->end_date = $request->tripedate;
        $trip->description = $request->tripdesc;
        $trip->price = $request->tripprice;
        $trip->number_of_seats = $request->tripseats;
        if (isset($request->tripfonly)) {
        $trip->female_only = '1';            
        }
        else {
        $trip->female_only = '0';
        }
        $trip->save();
        return redirect('/admindashboard');
	}

    public function edit($trip_id) {
        $trip = Trips::find($trip_id);
        return view('tripform', compact('trip'));
    }

    public function show() {
    	$trip = Trips::all();
    	return view('admindashboard',compact('trip'));
    }

    public function destroy($trip_id){
        //write delete logic here
        $trip = Trips::find($trip_id);
        $trip->delete();
        return redirect('/admindashboard');
    }
}
