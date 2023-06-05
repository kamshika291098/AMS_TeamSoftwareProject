@extends('dashboard.admindashboard')
@section('manageorganization')
<!-- error messages --> 
@if ($message = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" style="color: rgb(145, 36, 46);"><i class="fa fa-xmark"></i></button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
    <button type="button" class="close" style="color: rgb(145, 36, 46);" data-dismiss="alert" ><i class="fa fa-xmark"></i></button>
        <strong><i class="fa fa-exclamation-triangle"></i> Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if(session('success'))
<div class="alert alert-success" role="alert">
<strong><i class="fa fa-check"></i></strong>
   <button type="button" class="close" style="color: rgb(28, 115, 48);" data-dismiss="alert" ><i class="fa fa-xmark"></i></button>
   <strong>{{session('success')}}</strong>
</div>
@endif
<div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-6">
                        <h1 class="m-0" style="color: rgb(59, 116, 123);"><span class="fa fa-thin fa-shop"></span> Manage Organizations</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Organizations</li>
                     </ol>
                  </div>
                  <!-- /.col -->
               </div>
               <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /.content-header -->
         <!-- Main content -->
<section class="content">
<div class="col-sm-3">
         <div class="input-group rounded">
            <form  action="{{route('organizationssearch')}}" method="get">
               @csrf
               <div class="input-group-prepend">
                  <input type="search" class="form-control"  name="searchorganization" placeholder="Search Organization">
                  <button style="color: rgb(65, 74, 187);" class="btn-xsmall border-0 bg-transparent" type="submit"><i class="fa fa-search fa-2xl"></i></button>
                  
               </div>
            </form>
            <div class="input-group-prepend">
               <a href="{{ route('organizations.index') }}" class=" mt-1">
                  <button style="color: rgb(189, 26, 26);" class="btn-xsmall border-0 bg-transparent" type="submit"><i class="fa fa-sync-alt fa-2xl"></i></button>
               </a>
            </div>
         </div>
      </div>
<div class="text-right">
   <a class="btn btn-md btn-default" href="{{route('organizations.create')}}"><i class="fa fa-thin fa-shop"></i> Add New Organization</a>
</div>
<div class="container-fluid"><br/>
               @php
                $n=0;
                @endphp
               <div class="col-md-12">
                  <table id="organization" class="table table-bordered table-striped">
                     <caption>Organizations</caption>
                     <thead>
                        <tr>
                           <th>NO</th>
                           <th>Organization Name</th>
                           <th>Email</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($organizations as $organization)
                        <tr>
                           <td>{{++$n}}</td>
                           <td>{{$organization->organizationname}}</td>
                           <td>{{$organization->email}}</td>
                           <td class="text-center">
                              <form action="{{route('organizations.destroy',$organization->id)}}" method="post">
                                 @csrf
                                 @method('DELETE')
                                 <a style="color: rgb(23, 162, 184);" class="btn-xs" href="{{route('organizations.show',$organization->id)}}" role="button"><i class="fa-regular fa-eye fa-xl"></i></a>
                                 <a style="color: rgb(0, 128, 0);" class="btn-xs" href="{{route('organizations.edit',$organization->id)}}" role="button"><i class="fa-regular fa-pen-to-square fa-xl"></i></a>
                                 <button style="color: rgb(205,54,68);" class="btn-xsmall border-0 bg-transparent" type="submit"><i class="fa-regular fa-trash-alt fa-xl"></i></button>
                                 <!--<a class="btn btn-sm btn-danger btn-circle" href="#" data-toggle="modal" data-target="#delete"><i class="fa fa-trash-alt fa-2x"></i></a>-->
                                 </form>
                           </td>
                        </tr>
                        @endforeach
                        </tbody>    
                  </table>
                
               </div>
            </div>
      </div>

</section>

@endsection