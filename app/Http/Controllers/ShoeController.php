<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shoes = Shoe::all();
        return view('shoes.index',  compact('shoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shoes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ShoeData = $request->validate([
            'shoe_name' =>   ['required'],
            'category' => ['required'],
            'price' =>  ['required', 'numeric'],
            'size' => ['required'],
            'image' => ['required', 'mimes:jpg, png, jpeg, webp'],
        ]);

        $imagePath = null;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $imagePath = $request->image->store('shoes', 'public');
        }
    
        // Check if image upload was successful
        if (!$imagePath) {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }

        $newShoe = Shoe::create([
            'shoe_name' => $ShoeData['shoe_name'],
            'category' =>  $ShoeData['category'],
            'price' => $ShoeData['price'],
            'size' => $ShoeData['size'],
            'image' => $imagePath,
        ]);

        return redirect(route('shoes.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shoe = Shoe::FindorFail($id);
        return view('shoes.show', compact('shoe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ShoeData = Shoe::findorfail($id);
        return view('shoes.edit', compact('ShoeData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shoe = Shoe::FindorFail($id);

        $ShoeData = $request->validate([
            'shoe_name' =>   ['required'],
            'category' => ['required'],
            'price' =>  ['required', 'numeric'],
            'size' => ['required'],
            'image' => ['required', 'mimes:jpg, png, jpeg, webp'],
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->image->store('shoes', 'public');
            $ShoeData['image'] = $imagePath;
        }
       

        $shoe->update($ShoeData);

        return redirect('/shoes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ShoeData = Shoe::FindorFail($id);
        
        $ShoeData->delete();

        return redirect('/shoes');
    }

    public function shop()
    {
        $shoes = Shoe::all();
        return view('shoes.shop',  compact('shoes'));
    }

    public function about()
    {
        return view('about');
    }
}
