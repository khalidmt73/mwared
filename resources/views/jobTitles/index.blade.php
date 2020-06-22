@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center">
<div class="col-2 text-right">
        <br /> <h5 class ="text-center">الوظائف</h5>
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
        <a href="{{route('jobTitle.create')}}" class="btn float-left " style="color: #00cc00; font-size:30px">
            <i class="fas fa-plus-circle ">
            </i> </a>

    </div>
</div>


<table class="table table-hover table-striped table-bordered table-sm" >
<thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-right">الوظيفة</th>
                </tr>
            </thead>
            <tbody >
            @foreach ($jopTitles as $jobTitle)
            <tr>
                <td class="text-right">
                    {{$jobTitle->jobTitle}}

                    <form class="float-left" action="{{ route('jobTitle.destroy',$jobTitle->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-md mr-2" style="color:red">
                            <li class="fa fa-trash"></li> حذف
                        </button>
                    </form>

                    <a href="{{ route('jobTitle.edit',$jobTitle->id) }}" class="btn btn-md float-left " style="color:blue">
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
