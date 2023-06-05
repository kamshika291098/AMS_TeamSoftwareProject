@extends('dashboard.admindashboard')
@section('editincharge')

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
            <h1 class="m-0" style="color: rgb(86,138,161);"><span class="fa-sharp fa-solid fa-coins fa-beat"></span> Update Incharge</h1>
         </div>
                  <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Update Incharge</li>
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
   <div class="text-left">
    <a class="btn" style="background-color: rgba(86,138,161); color:white" href="{{route('incharges.index')}}"><i class="fa fa-arrow-left"></i><b> Back</b></a>
   </div></br>
<div class="container-fluid">
   <div class="card card-info">
              
                  <div class="card-header">
                     <h3 class="card-title"><i class="fa fa-info-circle fa-xs"></i> Incharge Information</h3>
                  </div>
                  <!-- /.card-header -->
   <div class="card-body">
   <div class="col-md-9">
      <form method="post" action="{{route('incharges.update', $incharge->id)}}">
         @method('PATCH')
         @csrf
      <div class="column">
         <div class="col-md-4">
               <div class="form-group">
                  <label>ID</label>
                  <input type="text" class="form-control" style="border-color: rgba(86,138,161);" name="id" value="{{$incharge->id}}" readonly>
               </div>
         </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Incharge Name</label>
                <input type="text" class="form-control" style="border-color: rgba(86,138,161);" name="inchargename" value="{{$incharge->inchargename}}">
             </div>
        </div>
       
        <div class="col-md-4">
			<div class="form-group">
				<label>Organization Name</label>
            <br/>
            <select name="organization_id"  class="form-control form-select" style="border-color: rgba(86,138,161);">
            @foreach($organizations as $organization)
               <option value="{{$organization->id}}" {{$incharge->organization_id == $organization->id ? 'selected':''}}>{{$organization->organizationname}}</option>
            @endforeach
            </select>
			</div>
		</div> 
      
      
        <div class="col-md-4">
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" style="border-color: rgba(86,138,161);" value="{{$incharge->email}}">
			</div>
		</div> 
        <div class="col-md-4">
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" style="border-color: rgba(86,138,161);">
			</div>
		</div> 
        <div class="col-md-4">
			<div class="form-group">
				<label>Phone Number</label>
				<input type="string" name="phonenumber" class="form-control" style="border-color: rgba(86,138,161);"  value="{{$incharge->phonenumber}}">
			</div>
		</div>
  <div class="col-md-4">
		<div class="form-group">
			<label>Position</label>
			<input type="text" name="position" class="form-control" style="border-color: rgba(86,138,161);" value="{{$incharge->position}}">
		</div>
	</div>
      <div class="col-md-4">
		<div class="form-group">
			<label>Address</label>
			<input type="text" name="address" class="form-control" style="border-color: rgba(86,138,161);" value="{{$incharge->address}}">
						</div>
					</div>
                     <!-- /.card-body -->
         <div class="col-md-9">
          <div class="card-footer">
            <button type="submit" class="btn" style="background-color: rgba(86,138,161); color:white "><i class="fa fa-pen-fancy"></i><b> Update</b></button>
          </div>
         </div>
      </form>
   </div>
   
</div>
            <!-- /.container-fluid -->
</section>
@endsection