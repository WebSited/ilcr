<?php

namespace App\Http\Controllers;

use App\News;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        $news = DB::table('news')->orderBy('created_at', 'desc')->get();
        return view('admin.news.news', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create_news');
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
            'title' => 'required',
            'news' => 'required',
            'author' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $path = public_path().'/img/news/';
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name);
        
        $news = new News();

        $news->title = $request->title;
        $news->news = $request->news;
        $news->author = $request->author;
        $news->img = $name;

        $news->save(); 

        $request->session()->flash('success', 'News Added successfully');
        return redirect()->route('admin.news');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit_news', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news = News::find($id);

        $this->validate($request, [
            'title' => 'required',
            'news' => 'required',
            'author' => 'required'

        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/img/news/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        $news->img = $name; 
        }
        $news->title = $request->title;
        $news->news = $request->news;
        $news->author = $request->author;
        $news->save();

        return redirect('/admin/news')->with('success', 'News updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('id', $id)->delete();   
        return redirect('/admin/news')->with('success', 'News Deleted successfully');
    }
}
