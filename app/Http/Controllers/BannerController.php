<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;
use Illuminate\Support\Str;
class BannerController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banners::orderBy('id', 'DESC')->paginate(10);
        return view('backend.banners.index')->with('banners', $banners);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banners.create');
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
            'title' => 'string|required',
            'content' => 'string|nullable',
            'photo' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $slug = Str::slug($request->title);
       

        if (Banners::where('status', 'active')->count() == 1) {
            $data['status'] = "inactive";
        }
       
        $status = Banners::create($data);
        if ($status) {
            request()->session()->flash('success', 'Banner successfully added');
        } else {
            request()->session()->flash('error', 'Error occurred while adding banner');
        }
        return redirect()->route('banner.index');
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
        $countActive = Banners::where('status', 'active')->count();
        $banners = Banners::findOrFail($id);
        return view('backend.banners.edit')->with('banners', $banners)->with('countActive', $countActive);
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
        $banners = Banners::findOrFail($id);
        $this->validate($request, [
            'title' => 'string|required',
            'content' => 'string|nullable',
            'photo' => 'string|required',
            'status' => 'required|in:active,inactive',
        ]);
        $data = $request->all();
        $status = $banners->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Banner successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred while updating banner');
        }
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banners = Banners::findOrFail($id);
        $status = $banners->delete();
        if ($status) {
            request()->session()->flash('success', 'Banner successfully deleted');
        } else {
            request()->session()->flash('error', 'Error occurred while deleting banner');
        }
        return redirect()->route('banner.index');
    }
}
