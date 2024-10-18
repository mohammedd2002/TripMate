<?php

namespace App\Http\Controllers;
use App\Models\Guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreGuideRequest;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guides = Guide::paginate(10);
        
        return view('admindashboard.guide.show' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admindashboard.guide.create' , get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuideRequest $request)
    {
        $data = $request->validated();
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('guide', $newImageName, 'public');
            $data['image'] = $newImageName;
        }
        Guide::create($data);
        return to_route('admin.guide.index')->with('success', 'Your Guide Added successfuly');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guide $guide)
    {
        return view('admindashboard.guide.edit' ,compact('guide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreGuideRequest $request, Guide $guide)
    {
        $data = $request->validated();
        if ($request->hasFile('image')){
            //delete old image
            Storage::delete("public/guide/$guide->image");
            Storage::delete("public/giude/$guide->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('guide', $newImageName, 'public');
            $data['image'] = $newImageName;
        }
        $guide->update($data);
        return to_route('admin.guide.index')->with('success', 'Your Guide Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guide $guide)
    {
        Storage::delete("public/guide/$guide->image");
        Storage::delete("public/guide/$guide->image");
        $guide->delete();
        return back()->with('success', 'Your Guide Deleted successfuly');
    }
}
