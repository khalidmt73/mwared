@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center">
    <div class="col-4">
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
        <a href="{{route('jobTitle.create')}}" class="btn float-left " style="color: #00cc00; font-size:30px">
            <i class="fas fa-plus-circle ">
            </i> </a>

    </div>
</div>

<div class="card card-default">
    <div class="card-header">الوظائف</div>
    <table class="table">
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

</div>

@endsection