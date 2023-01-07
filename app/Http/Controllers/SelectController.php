<?php

namespace App\Http\Controllers;

use App\Models\Select;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $selects = Select::all();
        // return view('index', compact('selects'));
        return view('index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('show');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $post = new Select();
        $post->cars= $request->cars;
        $post->save();
        return redirect()->route('select.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Select  $select
     * @return \Illuminate\Http\Response
     */
    public function show(Select $select)
    {
        echo "aaa";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Select  $select
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = Select::find($id);
        $data = Select::find($id);

        return view('edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Select  $select
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Select $select)
    {
        // $students = Select::find($id);
        // $students->name = $request->input('cars');
        // $students->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Select  $select
     * @return \Illuminate\Http\Response
     */
    public function destroy(Select $select)
    {
        // dd($select);
        // $user = Select::findOrFail($select);
        // $user->delete();
    
        // return redirect('/admin/users'); 

        // $post = Select::find($select);
        // $post->delete();
        // return redirect()->back();

    //     $select->delete();
    // //    return $select;
    //     return redirect()->back();

        if($select->delete()){
             return redirect()->back();
        }
        echo "oop not deleted";

        // $select->delete() ? return redirect()->back() : "echo 'oops not deleted'";


    }
}
