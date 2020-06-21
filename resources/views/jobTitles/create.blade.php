@extends('layouts.app')
@section('content')
            <div class="card card-default">
                <div  class="card-header">
                      {{ isset($jobTitle) ? "تعديل الوظيفة" : "اضافة  وظيفة" }}
                </div>

                <div class="card-body">
                    <form action="{{ isset($jobTitle) ? route('jobTitle.update',
                    $jobTitle->id) : route('jobTitle.store') }} "  method="POST">
                        @csrf
                        @if (isset($jobTitle))
                             @method('PUT')
                        @endif
                        <div class="form-group>
                            <label for="jobTitle">اسم الوظيفة</label>
                            <input type="text" name="jobTitle" class="@error('jobTitle')
                             is-invalid @enderror
                            form-control" placeholder="اكتب اسم الوظيفة"
                            value = " {{ isset($jobTitle) ? $jobTitle->jobTitle : '' }} "
                            >
                            @error('jobTitle')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                             <div class="form-group">
                                <button class="btn btn-success mt-3">
                                {{ isset($jobTitle) ? "تعديل" : "اضافة" }}
                                </button>
                            </div>


                    </form>
                </div>

            </div>

@endsection
