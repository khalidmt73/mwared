<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EmployerOther;
use App\Http\Requests\EmployerOtherRequest;

class EmployerOtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EmployerOther $employerOther)
    {
        return view('employerOthers.index')->with('employerOthers',EmployerOther::paginate(5));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employerOthers.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployerOtherRequest $request)
    {
        EmployerOther::create($request->all());
        session()->flash('success','تمت إضافة السجل');
        return redirect (route('employerOther.index'));
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
    public function edit(EmployerOther $employerOther)
    {
        return view('employerOthers.create')->with('employerOther',$employerOther);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployerOther $employerOther)
    {
        $employerOther->update([
            'employerOther' => $request-> employerOther
    ]);

    session()->flash('success','تم تعديل الجهة');
    return redirect (route('employerOther.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployerOther $employerOther)
    {
        $employerOther->delete();
        session()->flash('delete','تم حذف الجهة');
        return redirect (route('employerOther.index'));
    }
}
