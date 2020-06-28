@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-4">
        <br />
        <h5 class="headTable">جهات التكليف والإعارة</h5>
    </div>
    <div class="col-4">

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


    <div class="col-4">
        <a href="{{route('employerOther.create')}}" class="btn float-left ">
            <i class="fas fa-plus-circle add">
            </i> </a>
    </div>
</div>

<table class="table table-hover table-striped  table-sm">
    <thead>
        <tr>
            <th scope="col">الجهة</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employerOthers as $employerOther)
        <tr>
            <td>
                {{$employerOther->employerOther}}
            </td>
            <td>

                <form class="float-left" action="{{ route('employerOther.destroy',$employerOther->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-md mr-2 float-left" style="color:#666666">
                        <li class="fa fa-trash"></li> حذف
                    </button>
                </form>
                <a href="{{ route('employerOther.edit',$employerOther->id) }}" class="btn btn-md float-left " style="color:#666666">
                    <li class="fa fa-edit"></li> تعديل
                </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<nav class="pagination pagination-md justify-content-center">
    {{ $employerOthers->links() }}
</nav>


@endsection