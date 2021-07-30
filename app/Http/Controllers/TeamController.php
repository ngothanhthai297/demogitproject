<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teams;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::orderBy('id', 'DESC')->paginate(10);
        return view('backend.teams.index')->with('teams', $teams);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.teams.create');
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
            'photo' => 'string|required',
        ]);
        $data = $request->all();

        // return $slug;
        $status = Teams::create($data);
        if ($status) {
            request()->session()->flash('success', 'Team successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Team');
        }
        return redirect()->route('teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Teams::findOrFail($id);
        return view('backend.teams.edit')->with('team', $team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $team = Teams::findOrFail($id);

        $data = $request->all();
        if ($request->photo == null) {
            $data['photo'] = "";
        }

        // $slug=Str::slug($request->title);
        // $count=Banner::where('slug',$slug)->count();
        // if($count>0){
        //     $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        // }
        // $data['slug']=$slug;
        // return $slug;

        $status = $team->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Team successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating Team');
        }
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Teams::findOrFail($id);
        $status = $team->delete();
        if ($status) {
            request()->session()->flash('success', 'Team successfully deleted');
        } else {
            request()->session()->flash('error', 'Error occurred while deleting Team');
        }
        return redirect()->route('teams.index');
    }
    public function getProductByCat($Cat_id)
    {
    }
}
