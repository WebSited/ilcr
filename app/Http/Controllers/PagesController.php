<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Activity;
use Image;
use Illuminate\Http\Request;
use App\Mail\SendMailable;

class PagesController extends Controller
{
    public function index()
    {
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        return view('home', ['single_activity' => $single_activity]);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function singleshow($activity)
    {
        $single_activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        $activity_single = Activity::find($activity);   
        return view('pages.activities', compact('activity_single', 'single_activity'));
    }

    public function masters()
    {
        return view('pages.masters');
    }

    public function training()
    {
        return view('pages.training');
    }

    public function pgd()
    {
        return view('pages.pgd');
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

}
