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
            <a href="{{route('employer.create')}}" class="btn float-left btn-success"
             style="margin-bottom: 6px;margin-top: 5px" 
            >اضف جهة </a>
        </div>
    </div>
</div>

            <div class="card card-default">
                <div  class="card-header">الجهات</div>
                <table class="table">
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
                                <button class="btn btn-danger btn-sm mr-2">حذف</button>
                             </form>
                             
                                 <a href="{{ route('employer.edit',$employer->id) }}" class="btn btn-primary float-left btn-sm">تعديل</a>
                             </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>

            </div>
       
@endsection
