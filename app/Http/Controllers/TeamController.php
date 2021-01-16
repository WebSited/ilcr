<?php

namespace App\Http\Controllers;

use App\Team;
use Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
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
        $team = DB::table('teams')->orderBy('created_at', 'desc')->get();
        return view('admin.team.team', ['team' => $team]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create_member');
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
            'name' => 'required',
            'rank' => 'required',
            'website' => 'required',
            'email' => 'required',
            'category' => 'required',
            'phone_number' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $path = public_path().'/img/team/';
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name);
        
        $team = new Team();

        $team->name = $request->name;
        $team->rank = $request->rank;
        $team->website = $request->website;
        $team->email = $request->email;
        $team->category = $request->category;
        $team->phone_number = $request->phone_number;
        $team->img = $name;

        $team->save(); 

        $request->session()->flash('success', 'Team Member Added successfully');
        return redirect()->route('admin.team');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show($team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('admin.team.edit_team', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Team::find($id);

        $this->validate($request, [
            'name' => 'required',
            'rank' => 'required',
            'website' => 'required',
            'email' => 'required',
            'category' => 'required',
            'phone_number' => 'required'

        ]);

        if ($request->hasFile('img')){ 

        $path = public_path().'/img/team/';      
        $originalImage = $request->file('img');
        $name = time().$originalImage->getClientOriginalName();
        $image = Image::make($originalImage);
        $image->resize(718, 486);
        $image->save($path.$name); 
        $team->img = $name; 
        }
        $team->name = $request->name;
        $team->rank = $request->rank;
        $team->website = $request->website;
        $team->email = $request->email;
        $team->category = $request->category;
        $team->phone_number = $request->phone_number;
        
        $team->save();

        return redirect('/admin/team')->with('success', 'Member updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        team::where('id', $id)->delete();   
        return redirect('/admin/team')->with('success', 'Team Member Deleted successfully');
    }
}
