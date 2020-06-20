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
            <a href="{{route('employerOther.create')}}" class="btn float-left btn-success"
             style="margin-bottom: 6px;margin-top: 5px" 
            >اضف جهة التكليف </a>
        </div>
    </div>
</div>

            <div class="card card-default">
                <div  class="card-header">جهات التكليف</div>
                <table class="table">
                    <tbody>
                        @foreach ($employerOthers  as $employerOther)
                        <tr>
                             <td>
                                 {{$employerOther->employerOther}}
                             </td>
                        
                             <td>
                             <form class="float-left" action="{{ route('employerOther.destroy',$employerOther->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm mr-2">حذف</button>
                             </form>
                                 <a href="{{ route('employerOther.edit',$employerOther->id) }}" class="btn btn-primary float-left btn-sm">تعديل</a>
                             </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>

            </div>
       
@endsection
