<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
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
        $activity = DB::table('activities')->orderBy('created_at', 'desc')->get();
        return view('admin.activity.activity', ['activity' => $activity]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activity.create_activity');
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
            'month' => 'required',
            'body' => 'required',
        ]);
                
        $activity = new Activity();
        $activity->month = $request->month;
        $activity->body = $request->body;
        $activity->save(); 
        $request->session()->flash('success', 'Activity Added successfully');
        return redirect()->route('admin.activity');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show( $activity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity = Activity::find($id);
        return view('admin.activity.edit_activity', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'month' => 'required',
            'body' => 'required',
            ]);
        $data = array(
            'month' => $request->input('month'),
            'body' => $request->input('body'),
        );       
        Activity::where('id', $id)->update($data);
        return redirect('/admin/activity')->with('success', 'Activity updated successfully'); 

        $team = Activity::find($id);
        $this->validate($request, [        
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        //
    }
}
