<?php

namespace App\Http\Controllers;

use App\Models\Road_maps;
use Illuminate\Http\Request;

class RoadmapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roadmaps = Road_maps::orderBy('id', 'DESC')->paginate(10);
        return view('backend.roadmaps.index')->with('roadmaps', $roadmaps);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.roadmaps.create');
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
            'title' => 'string|required',
            'date_start' => 'string|required',
            'sortby' => 'required',
        ]);
        $data = $request->all();

        // return $slug;
        $status = Road_maps::create($data);
        if ($status) {
            request()->session()->flash('success', 'Roadmap successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Roadmap');
        }
        return redirect()->route('roadmaps.index');
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
        $roadmap = Road_maps::findOrFail($id);
        return view('backend.roadmaps.edit')->with('roadmap', $roadmap);
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
        $roadmap = Road_maps::findOrFail($id);

        $this->validate($request, [
            'title' => 'string|required',
            'sortby' => 'required',
        ]);
        $data = $request->all();
        $status = $roadmap->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Roadmap successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating Roadmap');
        }
        return redirect()->route('roadmaps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roadmap = Road_maps::findOrFail($id);
        $status = $roadmap->delete();
        if ($status) {
            request()->session()->flash('success', 'Roadmap successfully deleted');
        } else {
            request()->session()->flash('error', 'Error occurred while deleting Roadmap');
        }
        return redirect()->route('roadmaps.index');
    }
}