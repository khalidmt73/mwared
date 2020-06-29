<?php

namespace App\Http\Controllers;

use App\Secondment;
use App\EmployerOther;
use App\Employee;
use App\Employer;
use App\JobTitle;

use Illuminate\Http\Request;

class SecondmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('secondments.form')->with('employer_others', EmployerOther::all());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('secondments.view');
    }


    public function secondment(Request $request)
    {
        $idEmp = $request->idEmp;

        $year = $request->year;
        $secondment = $request->secondment;
        $employerOther = $request->employerOther;


        $dataEmp  = Employee::where('idEmp', $idEmp)->first();
        if (!empty($dataEmp)) {
            $name = $dataEmp->nameEmp;
            $idNat = $dataEmp->idNational;

            $job =  $dataEmp->jobTitle_id;
            $emp = $dataEmp->employer_id;

            $obTitleWhere  = JobTitle::where('id', $job)->first();
            $employerWhere = Employer::where('id', $emp)->first();
            $otherWhere    = EmployerOther::where('id', $employerOther)->first();

            $jobTitle      = $obTitleWhere->jobTitle;
            $employer      = $employerWhere->employer;
            $other = $otherWhere->employerOther;

            $datas = ["name" => $name, "idNat" => $idNat, "jobTitle" => $jobTitle, "employer" => $employer, "other" => $other, "year" => $year, "secondment" => $secondment, "ok" => 1];
            //dd($datas);        exit;  
            return view('secondments.secondment')
                ->with('dataOne', $request)
                ->with('datas', $datas);
        } else {
            $ok = 0;
            $datas = ["ok" => $ok];
            return view('secondments.secondment')->with('datas', $datas);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
