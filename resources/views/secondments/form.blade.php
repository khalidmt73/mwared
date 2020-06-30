@extends('layouts.app')

@section('content')
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="{{route('secondment.search')}}">اضافة</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('secondment.index')}}">عرض</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('secondment.search')}}">بحث</a>
        </li>
    </ul>
</div>
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
            <select class="mr-1" name="year">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <input class="form-check-input mt-3 mr-4" checked type="radio" name="secondment" value="0">
            <label class="form-check-label mt-3 mr-5" for="exampleRadios3">
                جديد
            </label>
            <input class="form-check-input mt-3 mr-3" type="radio" name="secondment" value="1">
            <label class="form-check-label mt-3 mr-5" for="exampleRadios3">
                تجديد
            </label>
            <button type="submit" class="btn btn-primary mr-5">اضافة</button>

        </div>
    </form>
</div>
@endsection