<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AcademicYear;
use Session;
use Redirect;


class AcademicYearcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataset = AcademicYear::all();
        return view('index',compact('dataset'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.settings.academic-year.creat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataset = new AcademicYear();
        $dataset->title = $request->title;
        $dataset->start_data = $request->start_date;
        $dataset->end_data = $request->end_date;
        $dataset->status = '1';
        $dataset->save();
        Session::flash('success',"Academic-Year added");
        return Redirect()->route('academicyears.index');
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
        $dataset = AcademicYear::find($id);
        return view('backend.settings.academic-year.edit',comact('dataset'));

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
        $dataset =  AcademicYear::find($id);
        $dataset->title = $request->title;
        $dataset->start_data = $request->start_date;
        $dataset->end_data = $request->end_date;
        $dataset->status = '1';
        $dataset->update();
        Session::flash('success',"Academic-Year updated");
        return Redirect()->route('academicyears.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataset =  AcademicYear::find($id);
        $dataset->delete();
        Session::flash('success',"Record delete");
        return Redirect()->route('academicyears.index');
    }
}
