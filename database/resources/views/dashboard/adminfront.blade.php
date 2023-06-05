@extends('dashboard.admindashboard')
@section('admindash')
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
            <h1 style="color: rgb(59, 116, 123);"><span class="fa fa-gauge-high"></span> Dashboard</h1>
         </div>
                  <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </br>
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
    <div class="container-fluid">
      <div class="row">
      
       

      

       
       

       

       

    

        

     </div>   
    </div>
</section>           
     
@endsection
