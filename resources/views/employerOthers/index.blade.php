@extends('layouts.app')

@section('content')

<div class="row justify-content-md">
    <div class="col-4 text-right">
        <br />
        <h5 class="text-center">جهات التكليف والإعارة</h5>
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
        <a href="{{route('employerOther.create')}}" class="btn float-left " style="color: #666666; font-size:40px">
            <i class="fas fa-plus-circle ">
            </i> </a>
    </div>
</div>

<table class="table text-center table-hover table-striped table-bordered table-sm">
    <thead class="thead-dark">
        <tr>
            <th scope="col" class="text-right">الجهة</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employerOthers as $employerOther)
        <tr>
            <td class="text-right">
                {{$employerOther->employerOther}}

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