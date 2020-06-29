@extends('layouts.app')

@section('content')
<div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link " href="{{route('secondment.index')}}">اضافة</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{route('secondment.view')}}">عرض</a>
        </li>

    </ul>
</div>
<div class="container-fluid text-justify border p-3">
    View
</div>

@endsection