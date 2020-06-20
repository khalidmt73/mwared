@extends('layouts.app')
@section('content')
            <div class="card card-default">
                <div  class="card-header">
                      {{ isset($employee) ? "تعديل بيانات موظف" : "اضافة  موظف" }}
                </div>

                <div class="card-body">
                    <form action="{{ isset($employee) ? route('employee.update',
                    $employee->id) : route('employee.store') }} "  method="POST">
                        @csrf
                        @if (isset($employee))
                             @method('PUT')
                        @endif
                        <div class="form-group>
                            <label for="idEmp">الرقم الوظيفي</label>
                            <input type="text" name="idEmp" class="@error('idEmp')
                             is-invalid @enderror
                            form-control" placeholder="اكتب الرقم الوظيفي " 
                            value = " {{ isset($idEmp) ? $employee->idEmp : '' }} "
                            >
                            @error('employee')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <button class="btn btn-success mt-3">
                                {{ isset($employee) ? "تعديل" : "اضافة" }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
       
@endsection
