<?php

namespace App\Http\Controllers;

use App\Gallery;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gallery = DB::table('galleries')->orderBy('created_at', 'desc')->get();
        return view('admin.gallery.gallery', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create_gallery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $path = public_path().'/img/galleryz/';
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name);
        
        $gallery = new Gallery();

        $gallery->description = $request->description;
        $gallery->img = $name;

        $gallery->save(); 

        $request->session()->flash('success', 'Picture Added successfully');
        return redirect()->route('admin.gallery');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit_gallery', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);

        $this->validate($request, [
            'description' => 'required',

        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/img/galleryz/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        $gallery->img = $name; 
        }
        $gallery->description = $request->description;
        
        $gallery->save();

        return redirect('/admin/gallery')->with('success', 'Picture updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        gallery::where('id', $id)->delete();   
        return redirect('/admin/gallery')->with('success', 'Picture Deleted successfully');
    }
}
