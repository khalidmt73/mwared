<?php

namespace App\Http\Controllers;

use App\Secondment;
use App\EmployerOther;
use App\Employee;
use App\Employer;
use App\JobTitle;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SecondmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Secondment $secondment)
    {
        return view('secondments.index')->with('secondments', Secondment::all());
    }


    public function add()
    {
        return view('secondments.form')->with('employer_others', EmployerOther::all());
    }


    public function search()
    {
        return view('secondments.search')->with('secondments', Secondment::all());
    }


    public function view($idEmp)
    {
        $dataEmp  = Secondment::find($idEmp);

        $idEmp = $dataEmp->idEmp;
        $year = $dataEmp->year;
        $secondment = $dataEmp->typeSecondment;
        $employerOther = $dataEmp->employerOther_id;


        $employeeWhere  = Employee::where('idEmp', $idEmp)->first();




        $job           =  $employeeWhere->jobTitle_id;
        $emp           = $employeeWhere->employer_id;
        $obTitleWhere  = JobTitle::where('id', $job)->first();
        $employerWhere = Employer::where('id', $emp)->first();
        $otherWhere    = EmployerOther::where('id', $employerOther)->first();


        $idEmp            = $dataEmp->idEmp;
        $nameEmp          = $employeeWhere->nameEmp;
        $idNat            = $employeeWhere->idNational;
        $jobTitle         = $obTitleWhere->jobTitle;
        $employer         = $employerWhere->employer;
        $other            = $otherWhere->employerOther;
        $year             = $dataEmp->year;
        $secondment       = $dataEmp->typeSecondment;
        $dateSecondment   = $dataEmp->dateSecondment;
        $noOther          = $dataEmp->noOther;
        $dateOther        = $dataEmp->dateOther;
        $onCouncil        = $dataEmp->onCouncil;
        $onSecretary      = $dataEmp->onSecretary;
        $dateSecretary    = $dataEmp->dateSecretary;
        $onCollege        = $dataEmp->onCollege;
        $dateCollege      = $dataEmp->dateCollege;
        $college_id       = $dataEmp->college_id;

        $datas = [
            "idEmp" => $idEmp, "name" => $nameEmp, "idNat" => $idNat, "jobTitle" => $jobTitle,
            "employer" => $employer, "other" => $other, "year" => $year, "secondment" => $secondment,
            "dateSecondment" => $dateSecondment, "noOther" => $noOther, "dateOther" => $dateOther,
            "onCouncil" => $onCouncil, "onSecretary" => $onSecretary, "dateSecretary" => $dateSecretary,
            "onCollege" => $onCollege, "dateCollege" => $dateCollege, "college_id" => $college_id
        ];
        return view('secondments.view')->with('datas', $datas);
    }

    public function word($idEmp)
    {

        $dataEmp  = Secondment::where('idEmp', $idEmp)->first();


        $idEmp = $dataEmp->idEmp;

        $year = $dataEmp->year;
        $secondment = $dataEmp->typeSecondment;
        $employerOther = $dataEmp->employerOther_id;


        $employeeWhere  = Employee::where('idEmp', $idEmp)->first();




        $job           =  $employeeWhere->jobTitle_id;
        $emp           = $employeeWhere->employer_id;
        $obTitleWhere  = JobTitle::where('id', $job)->first();
        $employerWhere = Employer::where('id', $emp)->first();
        $otherWhere    = EmployerOther::where('id', $employerOther)->first();


        $idEmp            = $dataEmp->idEmp;
        $nameEmp          = $employeeWhere->nameEmp;
        $idNat            = $employeeWhere->idNational;
        $jobTitle         = $obTitleWhere->jobTitle;
        $employer         = $employerWhere->employer;
        $other            = $otherWhere->employerOther;
        $year             = $dataEmp->year;
        $secondment       = $dataEmp->typeSecondment;
        $dateSecondment   = $dataEmp->dateSecondment;
        $noOther          = $dataEmp->noOther;
        $dateOther        = $dataEmp->dateOther;
        $onCouncil        = $dataEmp->onCouncil;
        $onSecretary      = $dataEmp->onSecretary;
        $dateSecretary    = $dataEmp->dateSecretary;
        $onCollege        = $dataEmp->onCollege;
        $dateCollege      = $dataEmp->dateCollege;
        $college_id       = $dataEmp->college_id;

        $datas = [
            "idEmp" => $idEmp, "name" => $nameEmp, "idNat" => $idNat, "jobTitle" => $jobTitle,
            "employer" => $employer, "other" => $other, "year" => $year, "secondment" => $secondment,
            "dateSecondment" => $dateSecondment, "noOther" => $noOther, "dateOther" => $dateOther,
            "onCouncil" => $onCouncil, "onSecretary" => $onSecretary, "dateSecretary" => $dateSecretary,
            "onCollege" => $onCollege, "dateCollege" => $dateCollege, "college_id" => $college_id
        ];
        return view('secondments.word')->with('datas', $datas);
    }

    public function result(Request $request)
    {
        $idEmp = $request->idEmp;
        $data  = Secondment::where('idEmp', $idEmp)->first();
        if (!empty($data)) {

            $datas = ["data" => $data];

            return view('secondments.result')->with('secondments', $datas);
        } else {

            return view('secondments.result2')->with('secondments');
        }
    }

    public function secondment(Request $request)
    {
        $idEmp = $request->idEmp;
        $year = $request->year;
        $secondment = $request->secondment;
        $employerOther = $request->employerOther;


        $dataEmp  = Employee::where('idEmp', $idEmp)->first();

        if (!empty($dataEmp)) {
            $name          = $dataEmp->nameEmp;
            $idNat         = $dataEmp->idNational;

            $job           =  $dataEmp->jobTitle_id;
            $emp           = $dataEmp->employer_id;

            $obTitleWhere  = JobTitle::where('id', $job)->first();
            $employerWhere = Employer::where('id', $emp)->first();
            $otherWhere    = EmployerOther::where('id', $employerOther)->first();

            $jobTitle      = $obTitleWhere->jobTitle;
            $employer      = $employerWhere->employer;
            $other         = $otherWhere->employerOther;
            $otherid       = $otherWhere->id;

            $datas = [
                "idEmp" => $idEmp, "name" => $name, "idNat" => $idNat, "jobTitle" => $jobTitle,
                "employer" => $employer, "otherid" => $otherid, "other" => $other, "year" => $year,
                "secondment" => $secondment, "ok" => 1
            ];
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
        $user_id = Auth::user()->id;
        Secondment::create(array_merge($request->all(), ['user_id' => $user_id]));
        session()->flash('success', 'تمت إضافة السجل');
        return redirect(route('secondment.index'));
        // return view('');
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
