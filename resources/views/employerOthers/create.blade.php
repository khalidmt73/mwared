@extends('layouts.app')
@section('content')
            <div class="card card-default">
                <div  class="card-header">
                      {{ isset($employerOther) ? "تعديل الجهة التكليف" : "اضافة  جهة التكليف" }}
                </div>

                <div class="card-body">
                    <form action="{{ isset($employerOther) ? route('employerOther.update',
                    $employerOther->id) : route('employerOther.store') }} "  method="POST">
                        @csrf
                        @if (isset($employerOther))
                             @method('PUT')
                        @endif
                        <div class="form-group>
                            <label for="employerOther">اسم الجهة التكليف</label>
                            <input type="text" name="employerOther" class="@error('employerOther')
                             is-invalid @enderror
                            form-control" placeholder="اكتب اسم الجهة التكليف" 
                            value = " {{ isset($employerOther) ? $employerOther->employerOther : '' }} "
                            >
                            @error('employerOther')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <button class="btn btn-success mt-3">
                                {{ isset($employerOther) ? "تعديل" : "اضافة" }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
       
@endsection
