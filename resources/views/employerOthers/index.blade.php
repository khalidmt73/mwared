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
        <a href="{{route('employerOther.create')}}" class="btn float-left " style="color: #00cc00; font-size:30px">
            <i class="fas fa-plus-circle ">
            </i> </a>
    </div>
</div>

<div class="card card-default">
    <div class="card-header">جهات التكليف</div>
    <table class="table">
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
                        <button class="btn btn-md mr-2" style="color:red">
                            <li class="fa fa-trash"></li> حذف
                        </button>
                    </form>
                    <a href="{{ route('employerOther.edit',$employerOther->id) }}" class="btn btn-md float-left " style="color:blue">
                        <li class="fa fa-edit"></li> تعديل
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection