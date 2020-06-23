@extends('layouts.app')

@section('content')

<div class="row justify-content-md">
    <div class="col-2 text-right">
        <br />
        <h5 class="text-center"> الموظفين </h5>
    </div>

    <div class="col-7">
        @if (session()->has('success'))
        <div class="alert alert-success text-center">
            {{session()->get('success')}}
        </div>
        @endif
        @if (session()->has('delete'))

        <div class="alert alert-danger text-center">
            {{session()->get('delete')}}
        </div>

        @endif
    </div>


    <div class="col-3">

        <a href="{{route('employee.create')}}" class="btn float-left " style="color: #666666; font-size:40px">
            <i class="fas fa-plus-circle ">
            </i> </a>
    </div>
</div>


<table class="table  table-hover table-striped  table-sm">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ر.الموظف</th>
            <th scope="col">اسم الموظف</th>
            <th scope="col">الوظيفة</th>
            <th scope="col">الجهة</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td>
                {{$employee->idEmp}}
            </td>
            <td>
                {{$employee->nameEmp}}
            </td>

            <td>
                {{$employee->jobTitle->jobTitle}}
            </td>
            <td>
                {{$employee->employer->employer}}
            </td>

            <td>
                <form class="float-left" action="{{ route('employee.destroy',$employee->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-md mr-2" style="color:#666666">
                        <li class="fa fa-trash"></li> حذف
                    </button> </form>

                <a href="{{ route('employee.edit',$employee->id) }}" class="btn float-left btn-md " class="btn btn-md float-left " style="color:#666666">
                    <li class="fa fa-edit"></li> تعديل
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<nav class="pagination pagination-md justify-content-center">
    {{ $employees->links() }}
</nav>



@endsection