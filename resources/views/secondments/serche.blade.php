@extends('layouts.app')

@section('content')

<div class="container-fluid text-justify border p-3">
    <form action="{{route('secondment')}}" method="get">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">رقم الموظف</label>
            <input type="email" class="" id="exampleInputEmail1" aria-describedby="emailHelp">
            <label for="exampleInputEmail1" class="mr-3">جهة الاعارة</label>
            <select class="" id="exampleFormControlSelect1" class="mr-3">
                <option>جامعة الفيصل</option>
                <option>الملك سعود</option>
                <option>وزارة التعليم</option>
            </select>
            <label for="exampleInputEmail1" class="mr-3"> مدة الاعارة</label>
            <select class="mr-3" id="exampleFormControlSelect1">
                <option>1</option>
                <option>2</option>
            </select>
            <input class="form-check-input mr-4" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
            <label class="form-check-label mr-5" for="exampleRadios3">
                جديد
            </label>
            <input class="form-check-input mr-4" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
            <label class="form-check-label mr-5" for="exampleRadios3">
                تجديد
            </label>
            <button type="submit" class="btn btn-primary mr-5">بحث</button>

        </div>
    </form>

</div>

@endsection