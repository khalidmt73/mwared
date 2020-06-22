<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobTitle;
use App\Http\Requests\JobTitleRequest;



class JobTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('jobTitles.index')->with('jopTitles',JobTitle::paginate(5));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobTitles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobTitleRequest $request)
    {
        JobTitle::create($request->all());
        session()->flash('success','تمت إضافة السجل');
        return redirect (route('jobTitle.index'));
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
    public function edit(JobTitle $jobTitle)
    {
        return view('jobTitles.create')->with('jobTitle',$jobTitle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobTitle $jobTitle)
    {
        $jobTitle->update([
            'jobTitle' => $request-> jobTitle
     ]);

        session()->flash('success','تم تعديل الجهة');
        return redirect (route('jobTitle.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobTitle $jobTitle)
    {
        $jobTitle->delete();
        session()->flash('delete','تم حذف الجهة');
        return redirect (route('jobTitle.index'));
    }
}
