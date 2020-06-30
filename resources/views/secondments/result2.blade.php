@extends('layouts.app')

@section('content')
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link " href="{{route('secondment.add')}}">اضافة</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="{{route('secondment.index')}}">عرض</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('secondment.search')}}">بحث</a>
        </li>

    </ul>
</div>


<div class="container-fluid text-justify border p-3">

    <div class="row">
        الرقم غير صحيح
    </div>
</div>

@endsection