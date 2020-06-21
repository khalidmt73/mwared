@extends('layouts.app')
@section('content')
            <div class="card card-default">
                <div  class="card-header">
                      {{ isset($employer) ? "تعديل الجهة" : "اضافة  جهة" }}
                </div>

                <div class="card-body">
                    <form action="{{ isset($employer) ? route('employer.update',
                    $employer->id) : route('employer.store') }} "  method="POST">
                        @csrf
                        @if (isset($employer))
                             @method('PUT')
                        @endif
                        <div class="form-group>
                            <label for="employer">اسم الجهة</label>
                            <input type="text" name="employer" class="@error('employer')
                             is-invalid @enderror
                            form-control" placeholder="اكتب اسم الجهة"
                            value = " {{ isset($employer) ? $employer->employer : '' }} "
                            >
                            @error('employer')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success mt-3">
                                {{ isset($employer) ? "تعديل" : "اضافة" }}
                                </button>
                            </div>

                    </form>
                </div>

            </div>

@endsection
