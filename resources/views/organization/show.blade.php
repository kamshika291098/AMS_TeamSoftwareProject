@extends('dashboard.admindashboard')
@section('showorganization')
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0" style="color: rgb(86,138,161);"><i class="fa fa-info-circle"></i> Organization Detail</h1>
         </div>
                  <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Organization Detail</li>
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
<div class="container-fluid">
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title"><i class="fa fa-info-circle fa-xs"></i> Organization Information</h3>
                  </div>
                  <!-- /.card-header -->
               <div class="card-body">
               
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <strong>ID:</strong>
                           {{$organization->id}}
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                         <div class="form-group">
                          <strong>Organization Name:</strong>
                           {{$organization->organizationname}}
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           <strong>Email:</strong>
                           {{$organization->email}}
                        </div>
                     </div>
                    
                    
               
               </div>
                     <!-- /.card-body -->

                     <div class="card-footer">
                        
                        <a class="btn" style="background-color: rgba(86,138,161); color:white" href="{{route('organizations.index')}}"><i class="fa fa-arrow-left"></i><b> Back</b></a>
                    </div>
                  
               </div>
            </div>
            <!-- /.container-fluid -->
</section>
@endsection