@extends('layouts.app')

@section('content')

<div class="container-fluid text-justify border p-3">
    <form action="{{route('secondmentForm')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">رقم الموظف</label>
            <input type="number" name="idEmp" class="">
            <label for="exampleInputEmail1" class="mr-3">جهة الاعارة</label>
            <select class="" name="employerOther" class="mr-3">
                @foreach ($employer_others as $employerOther)
                <option value="{{$employerOther->id}}">{{$employerOther->employerOther}}</option>
                @endforeach
            </select>
            <label for="" class="mr-3"> مدة الاعارة</label>
            <select class="mr-3" name="year">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <input class="form-check-input mr-4" type="radio" name="secondment" value="0">
            <label class="form-check-label mr-5" for="exampleRadios3">
                جديد
            </label>
            <input class="form-check-input mr-4" type="radio" name="secondment" value="1">
            <label class="form-check-label mr-5" for="exampleRadios3">
                تجديد
            </label>
            <button type="submit" class="btn btn-primary mr-5">بحث</button>

        </div>
    </form>
</div>
@endsection