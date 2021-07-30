<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Whitepapers;
use Illuminate\Support\Str;

class WhitepaperController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whitepaper = Whitepapers::orderBy('id', 'DESC')->paginate(10);
        return view('backend.whitepapers.index')->with('whitepapers', $whitepaper);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.whitepapers.create');
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
                'description' => 'string|required',
                
            ]
        );
        $data = $request->all();
        if ($request->upload) {
            if ($request->upload->getClientOriginalExtension() == "pdf") {
                $data['upload_file'] = $request->upload->getClientOriginalName();
                $file = $request->upload->getClientOriginalName();
                $filePath = public_path() . '\uploads\document';

                $request->upload->move($filePath, $file);
            } else {
                return redirect()->route('whitepapers.create')->with('error', 'Upload Faild , only upload .pdf ');
            }
        }
        $status = Whitepapers::create($data);
        if ($status) {
            request()->session()->flash('success', 'Successfully added Whitepapers');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Whitepapers');
        }
        return redirect()->route('whitepapers.index');
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
        $whitepapers = Whitepapers::findOrFail($id);
        return view('backend.whitepapers.edit')->with('whitepapers', $whitepapers);
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
        $whitepapers = Whitepapers::findOrFail($id);
        //Kiểm tra request -> trả về error
        $this->validate($request, [
            'title' => 'string|required',
            'description' => 'string|required',
            
        ]);
        $data = $request->all();

        if ($request->upload) {
            if ($request->upload->getClientOriginalExtension() == "pdf") {
                $data['upload_file'] = $request->upload->getClientOriginalName();
                $file = $request->upload->getClientOriginalName();
                $filePath = public_path() . '\uploads\document';
                $request->upload->move($filePath, $file);
            } else {
                return redirect()->route('whitepapers.index')->with('error', 'Update faild, upload file only .pdf ');
            }
        } else {
            $data['upload_file'] = $whitepapers['upload_file'];
        }
        //Lưu dữ liệu xuống database và kiểm tra
        $status = $whitepapers->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'whitepapers successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
        return redirect()->route('whitepapers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $whitepapers = Whitepapers::findOrFail($id);
        // return $child_cat_id;
        $status = $whitepapers->delete();

        if ($status) {
            request()->session()->flash('success', 'whitepapers successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting whitepapers');
        }
        return redirect()->route('whitepapers.index');
    }
    
}
