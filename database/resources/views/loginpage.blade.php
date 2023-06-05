<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AttendanceManagement system</title>
  <!-- Custom fonts for this template-->
  <!--<script src="https://kit.fontawesome.com/9225fb6e68.js" crossorigin="anonymous"></script>-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:wght@700&display=swap" rel="stylesheet">
  <link href="asset/css/adminlte.min.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/style.css">
  <link rel="stylesheet" href="asset/fontawesome6/css/all.min.css">
  <!--body{background-image: url('/img/OIP.jfif');}
	body{background-size: cover;}-->
  <style>
    body{font-family: 'Gentium Plus', serif;}
  </style>
</head>
<body id="gradlogin">
<div  class="container-lg ">
<div class="col-xl-3 col-md-6 mb-6 mx-auto ">
	<div class="row align-items-center vh-100">
	<div class="card card-outline card-dark text-center mb-3 " style="width: 60rem; border-color: rgba(59, 116, 123);">
	    <div class="card-header bg-transparent">
		<h4 style="color: rgba(59, 116, 123);">Welcome to AMS Login </h4>
		<i class="fa fa-solid fa-user fa-3x fa-beat-fade" style="color: rgba(59, 116, 123); --fa-animation-duration: 3s;"></i>
	    </div>
		
    	@if ($message = Session::get('error'))
        	<div class="alert alert-danger">
          	  	<button type="button" class="close" data-dismiss="alert">x</button>
            	<strong>{{ $message }}</strong>
        	</div>
        @endif
   		@if ($errors->any())
		   <div class="alert alert-danger">
					<strong><i class="fa fa-exclamation-triangle"></i> Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
						</ul>
			</div></br>
        @endif
	    <div class="card-body card-outline card-dark text-center mb-3 " style="border-color: rgba(59, 116, 123);">
		    <form method="post" action="{{ url('/userchecklogin') }}"> 
			@csrf
			<div class="row">
				<p>
					<div class="form-group">
					<div class="col-md-15">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text border-0 bg-transparent"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" style="border-color: rgba(59, 116, 123);" name="username" placeholder="UserName"/>
					</div>	
					</div>
					</div>
				</p>
				<p>
					<div class="form-group">
					<div class="col-md-15">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text border-0 bg-transparent"><span class="fas fa-lock"></span></i></span>
						</div>
						<input type="password" class="form-control" style="border-color: rgba(59, 116, 123);" name="password" placeholder="Password"/>
					</div>
					</div>
					</div>

				</p>
				<p>
					<div class="form-group">              
						<button type="submit" class="btn btn-block" style="background-color: rgba(59, 116, 123); color:white"><i class="fas fa-users"></i> Login</button>
					<div>
				<p>
			</div>	
			</form>
	    </div>
	</div>
	</div>
</div>
</div>
</body>
</html>