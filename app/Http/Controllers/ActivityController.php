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
            'year' => 'required',
            'january' => 'required',
            'february' => 'required',
            'march' => 'required',
            'april' => 'required',
            'may' => 'required',
            'june' => 'required',
            'july' => 'required',
            'august' => 'required',
            'september' => 'required',
            'october' => 'required',
            'november' => 'required',
            'december' => 'required'
        ]);
                
        $activity = new Activity();
        $activity->year = $request->year;
        $activity->january = $request->january;
        $activity->february = $request->february;
        $activity->march = $request->march;
        $activity->april = $request->april;
        $activity->may = $request->may;
        $activity->june = $request->june;
        $activity->july = $request->july;
        $activity->august = $request->august;
        $activity->september = $request->september;
        $activity->october = $request->october;
        $activity->november = $request->november;
        $activity->december = $request->december;

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
    public function show($activity)
    {
        $activity_data = Activity::find($activity);   
        return view('admin.activity.activity_show', compact('activity_data'));
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
            'year' => 'required',
            'january' => 'required',
            'february' => 'required',
            'march' => 'required',
            'april' => 'required',
            'may' => 'required',
            'june' => 'required',
            'july' => 'required',
            'august' => 'required',
            'september' => 'required',
            'october' => 'required',
            'november' => 'required',
            'december' => 'required'
            ]);
        $data = array(
            'year' => $request->input('year'),
            'january' => $request->input('january'),
            'february' => $request->input('february'),
            'march' => $request->input('march'),
            'april' => $request->input('april'),
            'may' => $request->input('may'),
            'june' => $request->input('june'),
            'july' => $request->input('july'),
            'august' => $request->input('august'),
            'september' => $request->input('september'),
            'october' => $request->input('october'),
            'november' => $request->input('november'),
            'december' => $request->input('december'),
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
    public function destroy($id)
    {
        Activity::where('id', $id)->delete();   
        return redirect('/admin/activity')->with('success', 'Activity deleted successfully!');
    }
}
