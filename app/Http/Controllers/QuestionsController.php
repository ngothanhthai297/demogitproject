<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Questions;

class QuestionsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Questions::orderBy('id', 'DESC')->paginate(10);
        return view('backend.questions.index')->with('questions', $questions);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('backend.questions.create')->with('categories', $categories);
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
                'question_name' => 'string|required',
                'question_content' => 'string|required',
                'categories_id' => 'string|required',
            ]
        );
        $data = $request->all();

        $status = Questions::create($data);
        if ($status) {
            request()->session()->flash('success', 'Successfully added Question');
        } else {
            request()->session()->flash('error', 'Error occurred while adding Question');
        }
        return redirect()->route('questions.index');
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
        $categories = Categories::all();
        $question = Questions::findOrFail($id);
        return view('backend.questions.edit')->with('question', $question)->with('categories',$categories);
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
        $question = Questions::findOrFail($id);

        $data = $request->all();
        //Lưu dữ liệu xuống database và kiểm tra
        $status = $question->fill($data)->save();
        if ($status) {
            request()->session()->flash('success', 'Questions successfully updated');
        } else {
            request()->session()->flash('error', 'Error occurred, Please try again!');
        }
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Questions::findOrFail($id);
        // return $child_cat_id;
        $status = $question->delete();
        if ($status) {
            request()->session()->flash('success', 'Questions successfully deleted');
        } else {
            request()->session()->flash('error', 'Error while deleting Question');
        }
        return redirect()->route('questions.index');
    }
}
