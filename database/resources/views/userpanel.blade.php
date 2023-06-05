<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attendance Management system</title>
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="/asset/fontawesome6/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:wght@700&display=swap" rel="stylesheet">
  <link href="/asset/css/adminlte.min.css" rel="stylesheet">
   <!--<link rel="stylesheet" href="/asset/css/style.css">-->
  <link rel="stylesheet" href="/asset/select2/css/select2.min.css">
  <link rel="stylesheet" href="/asset/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  
  <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,200,0,0" />-->
  <!--<script src="https://kit.fontawesome.com/9225fb6e68.js" crossorigin="anonymous"></script>-->
  <style>
    body{font-family: 'Gentium Plus', serif;}
  </style>
  
</head>
<body class="hold-transition sidebar-mini-md layout-fixed sidebar-collapse" style="color: rgba(59, 116, 123);">
    <div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: rgba(59, 116, 123);">
                   <!-- Left navbar links -->
                   
   <ul class="navbar-nav">
      <li class="nav-item">
         <a class="nav-link" style="color: white;" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
   </ul>
   <ul>
      <div class="col-sm-12">
         <div class="input-group rounded">
            <form  action="get">
               @csrf
               <div class="input-group-prepend">
                  <input type="search" class="form-control"  name="searchorganizations" placeholder="Search Organizations">
                  <button style="color: white;" class="btn-xsmall border-0 bg-transparent" type="submit"><i class="fa fa-search fa-xl"></i></button>
                  
               </div>
            </form>
            <div class="input-group-prepend">
               <a href="{{route('dash')}}" class=" mt-1">
                  <button style="color: white;" class="btn-xsmall border-0 bg-transparent" type="submit"><i class="fa fa-sync-alt fa-xl"></i></button>
               </a>
            </div>
         </div>
      </div>
   </ul>
            <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
   
      <!--<li class="nav-item">
      <input type="search" class="form-control"  name="searchmedicine" placeholder="Search Medicine">
      </li>-->
   
      <li class="nav-item">
      <a class="btn" style="color: white;" role="button">
         <!--<a class="btn" style="color: white;" role="button" id="model-btn" data-toggle="modal" data-target="#notify">-->
        
         </a>
      </li>
   
      <li class="nav-item">
         <a class="nav-link" style="color: white;" data-widget="fullscreen" href="#" role="button">
         <i class="fa fa-expand"></i>
         </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" style="color: white;" data-widget="fullscreen" href="#">
         <i class="fa fa-power-off"></i>
         </a>
      </li>
      <li class="nav-item">
         <a class="btn" style="color: white;" role="button" id="model-btn" data-toggle="modal" data-target="#profile">
         <i class="fa-regular fa-user"></i>
         </a>
      </li>

      
   </ul>
</nav>
      @yield('adminpanel')
     
    </div>
    <script src="/asset/jquery/jquery.min.js"></script>
    <script src="/asset/js/adminlte.js"></script>
    <script src="/asset/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/js/modal.js"></script>
    <script src="/asset/js/tabs.js"></script>
    <script src="/asset/js/datetime.js"></script>
    <script src="/asset/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script>
 $(function () {//Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
   

   })
     
 </script>
</body>

</html>