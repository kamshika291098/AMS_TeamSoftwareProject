@extends('dashboard.admindashboard')
@section('showorganization')

<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0" style="color: rgb(166, 145, 219);"><i class="fa fa-magnifying-glass"></i> Search</h1>
         </div>
                  <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Search</li>
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
                  
<div class="col-sm-3">

            <div class="info-box shadow-lg">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-pills"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><a href="{{route('organizations.index')}}">Search Organizations</a></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            
</div>

          
</div>    <!-- /.container-fluid -->
</section>

@endsection