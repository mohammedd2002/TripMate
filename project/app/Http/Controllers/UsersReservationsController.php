<?php

namespace App\Http\Controllers;
use \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UsersReservationsController extends Controller
{
    public function userreservations(){
        $users = User::with('destinations')->get();
        return view('admindashboard.userreservations.show', compact('users'));
    }
}
