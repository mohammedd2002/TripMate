<?php

namespace App\Http\Controllers;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user  = Auth::user();
        $destinations = $user->destinations;
        return view('front.myreservation' , get_defined_vars());
    }
    /**
      * Remove the specified resource from storage.
      */
    public function destroy($id, Request $request)
    {
        $deleteReason = $request->input('delete_reason');
        
        // Optionally log or store the reason
        // Log::info("Reservation $id canceled. Reason: $deleteReason");

        Auth::user()->destinations()->detach($id);

        return back()->with('success', "Reservation canceled successfully. Reason: $deleteReason");
    }
}
;