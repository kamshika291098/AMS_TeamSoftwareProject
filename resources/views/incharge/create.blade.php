@extends('dashboard.admindashboard')
@section('addincharge')
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
            <h1 class="m-0" style="color: rgb(86,138,161);"><span class="fa-sharp fa-solid fa-users-between-lines fa-beat" style="--fa-animation-duration: 3s;"></span> Add Incharge</h1>
         </div>
                  <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Add Incharge</li>
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
      <a class="btn btn-md btn-info" href="{{route('incharges.index')}}"><i class="fa fa fa-list"></i> Incharges List</a>
    </div>
<div class="container-fluid"></br>
    <div class="card card-info">
         <div class="card-header">
           <h3 class="card-title">Incharge Information</h3>
         </div>
                  <!-- /.card-header -->
                  <!-- form start -->
        <form  action="{{route('incharges.store')}}" method="post">
            @method('POST')
            @csrf
            <div class="card-body" id="gradcard">
				<div class="row">
					<div class="col-md-12">
                    <div class="card-header">
                   <center> <h5><span class="fa-sharp fa-solid  fa-users-between-lines  fa-beat"></span> Incharge Information</h5></center>
                    </div>
					</div>
				</div>
                     
				<div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                    <label>Incharge Name</label>
                                    </div>
                                    <div class="col-md-4">
                                <input type="text" name="inchargename" class="form-control" style="border-color: rgba(86,138,161);" placeholder="Incharge Name">

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    <div class="col-md-12">
						<div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
							<label>Organization Name</label>
                            </div>
                            <div class="col-md-4">
							<select name="organization"  class="form-control form-select" style="border-color: rgba(86,138,161);">  
                                @foreach($organizations as $organization)
                                <option value="{{$organization->id}}">{{$organization->organizationname}}</option>
                                @endforeach
                            </select>
						</div>
					</div> 
                </div>
            </div>
                    <div class="col-md-12">
						<div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
							<label>Email</label>
                            </div>
                            <div class="col-md-4">
							<input type="text" name="email" class="form-control" style="border-color: rgba(86,138,161);" placeholder="Email">
						</div>
					</div> 
                 </div>
                </div>
                    <div class="col-md-12">
						<div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
							<label>Password</label>
                        </div>
                        <div class="col-md-4">
							<input type="password" name="password" class="form-control" style="border-color: rgba(86,138,161);" placeholder="Password">
						</div>
					    </div> 
                    </div>
                </div>
                    <div class="col-md-12">
						<div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
							<label>Phone Number</label>
                            </div>
                            <div class="col-md-4">
							<input type="text" name="phonenumber" class="form-control" style="border-color: rgba(86,138,161);" placeholder="phonenumber">
						</div>
					</div>
                </div>
                </div>
            <div class="col-md-12">
						<div class="form-group">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
							<label>Position</label>
                            </div>
                            <div class="col-md-4">
							<input type="text" name="position" class="form-control" style="border-color: rgba(86,138,161);" placeholder="Position">
						</div>
					</div>
                </div>
                </div>
                
         <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="address">Address</label>
                </div>
                <div class="col-md-4">
                    <input type="text" id="address" name="address" class="form-control" style="border-color: rgba(86,138,161);" placeholder="Address">
                </div>
            </div>
        </div>
        
                    

                     <!-- /.card-body -->
    <div class="card-footer" style="display: flex; justify-content: center;">
    <button type="submit" class="btn" style="background-color: rgba(86,138,161); color:white;"><i class="fa fa-thin fa-users-between-lines "></i><i class="fa fa-plus fa-2xs"></i><b> Save Incharge</b></button>
    </div>

</div>
        </form>
	</div>
</div>

            <!-- /.container-fluid -->
</section>

@endsection