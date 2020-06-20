@extends('layouts.app')

@section('content')
<div class="row justify-content-md-center" >
<div class="col-4">    
   </div>
   <div class="col-4">    
      
    @if (session()->has('success'))
      <div class="alert alert-success text-center"  >
          {{session()->get('success')}}
       </div>
    @endif
    @if (session()->has('delete'))
      <div class="alert alert-danger text-center"  >
          {{session()->get('delete')}}
       </div>
    @endif 

   </div>
   

   <div class="col-4">
        <div class="clearfix">
            <a href="{{route('employee.create')}}" class="btn float-left btn-success"
             style="margin-bottom: 6px;margin-top: 5px" 
            >اضف موظف </a>
        </div>
    </div>
</div>

            <div class="card card-default">
                <div  class="card-header">الموظف</div>
                <table class="table">
                    <tbody>
                        @foreach ($employees as $employee)
                        <tr>
                             <td>
                                 {{$employee->idEmp}}
                             </td>
                        
                             <td>
                             <form class="float-left" action="{{ route('employee.destroy',$employee->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm mr-2">حذف</button>
                             </form>
                             
                                 <a href="{{ route('employee.edit',$employee->id) }}" class="btn btn-primary float-left btn-sm">تعديل</a>
                             </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>

            </div>
       
@endsection
