<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Subscriber;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ContactRequest;
use App\Models\About;
use App\Models\Guide;

class FrontController extends Controller
{
    public function index(Request $request)
{
    $search = $request->input('search');
    $destinations = Destination::when($search, function ($query) use ($search) {
        return $query->where('name', 'like', '%' . $search . '%');
    })->latest()->take(8)->get();

    return view('front.home', compact('destinations'));
}


    public function about(){
        $guides = Guide::get();
        $abouts = About::get();
        return view('front.about',compact('guides'),compact('abouts'));
    }

    public function contact(){

        return view('front.contact');
    }


    public function destination(){
        $alldestinations = Destination::latest()->paginate(8);
        $subscriberCount = Subscriber::count();
        return view('front.destination',compact('subscriberCount'),compact('alldestinations'));
    }
    public function singledestination($id ){
      
        $destination = Destination::find($id);
        // $subscriberCount = Subscriber::count();
        return view('front.singledestination', get_defined_vars());
    }

    public function contactStore(ContactRequest $request){
        $data=$request->validated();
        Contact::create($data);
        return back()->with('success','Your Message sent Successfully');
    }

    public function store(Request $request){
        $data = $request->validate([
                'email'=>'required|email|unique:Subscribers,email'
            ]);
        Subscriber::create($data);
        return back()->with('footer_status','Done💚');        
    }

    public function reservation($id){
        $user = Auth::user();
        if ($user->destinations()->where('destination_id', $id)->exists()) {
            return back()->with('status', 'You have already booked this trip.');
        }
        $user->destinations()->attach($id);
        return back()->with('success','Your trip has been booked successfully 💚');  

    }


    // public function myreservation(){

    //     $user  = Auth::user();
    //     $destinations = $user->destinations;
    //     // dd($destinations);
    //     return view('front.myreservation' , get_defined_vars());
    // }


}
