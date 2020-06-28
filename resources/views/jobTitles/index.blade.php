@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-2 ">
        <br />
        <h5 class="headTable">الوظائف</h5>
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
        <a href="{{route('jobTitle.create')}}" class="btn float-left">
            <i class="fas fa-plus-circle add">
            </i> </a>

    </div>
</div>


<table class="table table-hover table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th scope="col">الوظيفة</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jopTitles as $jobTitle)
        <tr>
            <td>
                {{$jobTitle->jobTitle}}
            </td>
            <td>
                <form class="float-left" action="{{ route('jobTitle.destroy',$jobTitle->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-md mr-2" style="color:#666666">
                        <li class="fa fa-trash"></li> حذف
                    </button>
                </form>

                <a href="{{ route('jobTitle.edit',$jobTitle->id) }}" class="btn btn-md float-left " style="color:#666666">
                    <li class="fa fa-edit"></li> تعديل
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<nav class="pagination pagination-md justify-content-center">
    {{ $jopTitles->links() }}
</nav>


@endsection