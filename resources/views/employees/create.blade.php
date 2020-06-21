@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">
        {{ isset($employee) ? "تعديل بيانات موظف" : "اضافة  موظف" }}
    </div>

    <div class="card-body">
        <form action="{{ isset($employee) ? route('employee.update',
                    $employee->id) : route('employee.store') }} " method="POST">
            @csrf
            @if (isset($employee))
            @method('PUT')
            @endif

            <div class="form-group">
                <label for="idEmp">الرقم الوظيفي</label>
                <input type="text" name="idEmp" class="@error('idEmp')
                             is-invalid @enderror
                            form-control" placeholder="اكتب الرقم الوظيفي "
                    value=" {{ isset($idEmp) ? $employee->idEmp : '' }} ">
                @error('employee')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nameEmp">اسم الموظف</label>
                <input type="text" name="nameEmp" class="@error('nameEmp')
                             is-invalid @enderror
                            form-control" placeholder="اكتب اسم الموظف"
                    value=" {{ isset($nameEmp) ? $employee->nameEmp : '' }} ">
                @error('employee')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="idNational">رقم الهوية الوطنية</label>
                <input type="text" name="idNational" class="@error('idNational')
                             is-invalid @enderror
                            form-control" placeholder="اكتب رقم الهوية الوظنية"
                    value=" {{ isset($idNational) ? $employee->idNational : '' }} ">
                @error('employee')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jobTitle">الوظيفة</label>
                <select class="form-control" name="jobTitle_id">
                @foreach ($jobTitles as $jobTitle)
                    <option value="{{$jobTitle->id}}"> {{$jobTitle->jobTitle}} </option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="employer">جهة العمل</label>
                <select class="form-control" name="employer_id" >
                @foreach ($employers as $employer)
                    <option value="{{$employer->id}}"> {{$employer->employer}} </option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-success mt-3">
                    {{ isset($employee) ? "تعديل" : "اضافة" }}
                </button>
            </div>

        </form>
    </div>

</div>

@endsection
