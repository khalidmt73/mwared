@extends('layouts.app')

@section('content')
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link " href="{{route('secondment.search')}}">اضافة</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('secondment.index')}}">عرض</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('secondment.search')}}">بحث</a>
        </li>
    </ul>
</div>
<div class="container text-center mt-5">
    <form action="{{route('secondment.result')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">رقم الموظف</label>
            <input type="number" name="idEmp" class="">
            <button type="submit" class="btn btn-primary mr-5">بحث</button>

        </div>
    </form>
</div>
@endsection