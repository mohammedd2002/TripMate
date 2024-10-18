<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAboutRequest;
use App\Models\About;
use Illuminate\Support\Facades\Storage;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::paginate(10);
        
        return view('admindashboard.about.show' , get_defined_vars());
    }

  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admindashboard.about.edit' ,compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAboutRequest $request, About $about)
    {
        $data = $request->validated();
        if ($request->hasFile('image')){
            //delete old image
            Storage::delete("public/about/$about->image");
            Storage::delete("public/about/$about->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('about', $newImageName, 'public');
            $data['image'] = $newImageName;
        }
        $about->update($data);
        return to_route('admin.about.index')->with('success', 'Your About Section Updated Successfuly');
    }

  
}
