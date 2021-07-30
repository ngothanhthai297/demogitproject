<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faqs;
use Illuminate\Support\Str;

class FAQController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faqs::orderBy('id', 'DESC')->paginate(10);
        return view('backend.fag.index')->with('faqs', $faqs);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.fag.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => 'string|required',
            ]
        );
        $data = $request->all();
        $status = Faqs::create($data);
        if ($status) {
            request()->session()->flash('success', 'Successfully added Faqs');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Faqs');
        }
        return redirect()->route('fag.index');
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
        $faqs = Faqs::findOrFail($id);
        return view('backend.fag.edit')->with('faqs', $faqs);
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
        //
        $faqs = Faqs::findOrFail($id);
        //Kiểm tra request -> trả về error
        $this->validate($request, [
            'title' => 'string|required',
        ]);
        $data = $request->all();
        //Lưu dữ liệu xuống database và kiểm tra
        $status = $faqs->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'faqs successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
        return redirect()->route('fag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqs = Faqs::findOrFail($id);
        // return $child_cat_id;
        $status = $faqs->delete();

        if ($status) {
            request()->session()->flash('success', 'faqs successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting faqs');
        }
        return redirect()->route('fag.index');
    }
}
