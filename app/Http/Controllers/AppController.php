<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apps;

class AppController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = Apps::orderBy('id', 'DESC')->paginate(10);
        return view('backend.apps.index')->with('apps', $apps);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.apps.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();

        $this->validate($request, [
            'content' => 'string|required',
            'photo' => 'string|required',
            'description' => 'string|nullable',
            'live' => 'string|nullable',
            'news' => 'string|nullable',
            'exchange' => 'string|nullable',
        ]);
        $data = $request->all();
        $status = Apps::create($data);
        if ($status) {
            request()->session()->flash('success', 'Apps successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Apps');
        }
        return redirect()->route('apps.index');
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
        $apps = Apps::findOrFail($id);
        return view('backend.apps.edit')->with('apps', $apps);
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
        $apps = Apps::findOrFail($id);
        $this->validate($request, [
            'content' => 'string|required',
            'photo' => 'string|required',
        ]);
        $data = $request->all();
        $status = $apps->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'App successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating App');
        }
        return redirect()->route('apps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apps = Apps::findOrFail($id);
        $status = $apps->delete();
        if ($status) {
            request()->session()->flash('success', 'App successfully deleted');
        } else {
            request()->session()->flash('error', 'Error occurred while deleting App');
        }
        return redirect()->route('apps.index');
    }
}
