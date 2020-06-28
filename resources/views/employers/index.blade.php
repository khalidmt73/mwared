@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2">
        <br />
        <h5 class="headTable">الجهات</h5>
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
        <a href="{{route('employer.create')}}" class="btn float-left">
            <i class="fas fa-plus-circle add">
            </i> </a>
    </div>
</div>


<table class="table table-hover table-striped table-sm">
    <thead>
        <tr>
            <th scope="col">الجهة</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employers as $employer)
        <tr>
            <td>
                {{$employer->employer}}
            </td>
            <td>
                <form class="float-left" action="{{ route('employer.destroy',$employer->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-md mr-2" style="color: #666666">
                        <li class="fa fa-trash"></li> حذف
                    </button>
                </form>

                <a href="{{ route('employer.edit',$employer->id) }}" class="btn float-left btn-md " class="btn btn-md float-left " style="color: #666666
">
                    <li class="fa fa-edit"></li> تعديل
                </a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<nav class="pagination pagination-md justify-content-center">
    {{ $employers->links() }}
</nav>



@endsection