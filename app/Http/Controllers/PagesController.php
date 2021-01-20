<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Activity;
use App\News;
use Image;
use Illuminate\Http\Request;
use App\Mail\SendMailable;

class PagesController extends Controller
{
    public function index()
    {
        $first_team = DB::table('teams')->where('category', 'Top')->orderBy('created_at', 'desc')->get();
        $second_team = DB::table('teams')->where('category', 'Others')->orderBy('created_at', 'desc')->get();
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        return view('home', [
            'single_activity' => $single_activity,
            'first_team' => $first_team,
            'second_team' => $second_team,
            ]);
    }

    public function about()
    {
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        return view('pages.about', ['single_activity' => $single_activity]);
    }

    public function singleshow($activity)
    {
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        $activity_single = Activity::find($activity);   
        return view('pages.activities', compact('activity_single', 'single_activity'));
    }

    public function masters()
    {
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        return view('pages.masters', ['single_activity' => $single_activity]);
    }

    public function training()
    {
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        return view('pages.training', ['single_activity' => $single_activity]);
    }

    public function pgd()
    {
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        return view('pages.pgd', ['single_activity' => $single_activity]);
    }

    public function mastersfm()
    {
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        return view('pages.masters_fm', ['single_activity' => $single_activity]);
    }

    public function pgdfm()
    {
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        return view('pages.pgd_fm', ['single_activity' => $single_activity]);
    }

    public function mail(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $admin_mail = 'inst4lcr@gmail.com';
        \Mail::to($admin_mail)->send(new SendMailable($data));
        return redirect('/#contact')->with('message', 'Thank You for your message. We will be in touch.');
    }

    public function getNews(){
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        $front_news = DB::table('news')->orderBy('created_at', 'desc')->get();
        return view('pages.news', ['single_activity' => $single_activity, 'front_news' => $front_news]);
    }

    public function News_show($news){
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        $news_data = News::find($news);   
        return view('pages.news_single', ['single_activity' => $single_activity, 'news_data' => $news_data]);
    }

    public function getGallery(){
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        $front_gallery = DB::table('galleries')->orderBy('created_at', 'desc')->get();
        return view('pages.gallery', ['front_gallery' => $front_gallery,'single_activity' => $single_activity]);
    }

}
