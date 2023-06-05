@extends('dashboard.admindashboard')
@section('addorganization')
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
            <h1 class="m-0" style="color: rgb(59, 116, 123);"><span class="fa fa-thin fa-shop fa-beat" style="--fa-animation-duration: 3s;"></span> Add Organization</h1>
         </div>
                  <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active"><a href="#">Add Organization</a></li>
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
    <div class="text-right">
      <a class="btn btn-md btn-default" href="{{route('organizations.index')}}"><i class="fa fa fa-list"></i> Organizations List</a>
    </div>
<div class="container-fluid"></br>
    <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title">Organization Information</h3>
         </div>
                  <!-- /.card-header -->
                  <!-- form start -->
        <form  action="{{route('organizations.store')}}" method="post">
            @method('POST')
            @csrf
            <div class="card-body" id="gradcard">
				<div class="row">
					<div class="col-md-12">
                    <div class="card-header">
                    <h5><span class="fa fa-thin fa-shop"></span> Organization Information</h5>
                    </div>
					</div>
				</div>
                     
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Organization Name</label>
							<input type="text" name="organizationname" class="form-control" style="border-color: rgba(59, 116, 123);" placeholder="Organization Name">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Email</label>
							<input type="text" name="email" class="form-control" style="border-color: rgba(59, 116, 123);" placeholder="Email">
						</div>
					</div>    
                     <!-- /.card-body -->
            <div class="card-footer">
               <button type="submit" class="btn" style="background-color: rgba(59, 116, 123); color:white "><i class="fa fa-thin fa-shop"></i><i class="fa fa-plus fa-2xs"></i><b> Save Organization</b></button>
            </div>
        </form>
	</div>
</div>

            <!-- /.container-fluid -->
</section>

@endsection