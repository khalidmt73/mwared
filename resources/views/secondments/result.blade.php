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
        <div class="col-2">
            <br />
            <h5 class="headTable"> الاعارة </h5>
        </div>

        <table class="table  table-hover table-striped  table-sm">
            <thead>
                <tr>
                    <th scope="col">ر.الموظف</th>
                    <th scope="col">اسم الموظف</th>
                    <th scope="col">جهة الاعارة</th>
                    <th scope="col">تاريخ الاعارة</th>
                    <th scope="col">مدة الاعارة</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($secondments as $secondment)
                <tr>
                    <td>
                        {{$secondment->idEmp}}
                    </td>
                    <td>
                        {{$secondment->employee->nameEmp}}
                    </td>
                    <td>
                        {{$secondment->employerOther->employerOther}}
                    </td>
                    <td>
                        {{$secondment->dateSecondment}}
                    </td>
                    <td>
                        @if( $secondment->year == 1)
                        عام
                        @else
                        عامين
                        @endif
                    </td>
                    <td>
                        <form class="float-left" action="{{ route('secondment.view',$secondment->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-md mr-2" style="color: #666666">
                                <li class="fa fa-eye"></li> عرض
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection