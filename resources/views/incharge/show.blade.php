@extends('dashboard.admindashboard')
@section('showincharge')
<div class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1 class="m-0" style="color: rgb(86,138,161);"><i class="fa fa-info-circle"></i> Incharge Detail</h1>
         </div>
                  <!-- /.col -->
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Incharge Detail</li>
            </ol>
         </div>
                  
      </div>
               
   </div>
            
</div>
   <section class="content">
   <div class="container-fluid">
      <div class="card card-info">
         <div class="card-header">
            <h3 class="card-title"><i class="fa fa-info-circle fa-xs"></i> Incharge Information</h3>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-12">
               <!--<div class="row">
                           <div class="col-md-4"><strong>ID:</strong></div>
                           <div class="col-md-8">{{$incharge->id}}</div>
                        </div>-->
                  <table class="table">
                     <tbody>
                        <tr>
                           <td class="col-md-2"><strong>ID:</strong></td>
                           <td class="col-md-10">{{$incharge->id}}</td>
                        </tr>
                        <tr>
                           <td class="col-md-2"><strong>Incharge Name:</strong></td>
                           <td class="col-md-10">{{$incharge->inchargename}}</td>
                        </tr>
                        <tr>
                           <td class="col-md-2"><strong>Organization Name:</strong></td>
                           <td class="col-md-10">{{$incharge->organization->organizationname}}</td>
                        </tr>
                        <tr>
                           <td class="col-md-2"><strong>Email:</strong></td>
                           <td class="col-md-10">{{$incharge->email}}</td>
                        </tr>
                        <tr>
                           <td class="col-md-2"><strong>Phone Number:</strong></td>
                           <td class="col-md-10">{{$incharge->phonenumber}}</td>
                        </tr>
                        <tr>
                           <td class="col-md-2"><strong>Position:</strong></td>
                           <td class="col-md-10">{{$incharge->position}}</td>
                        </tr>
                        <tr>
                           <td class="col-md-2"><strong>Address:</strong></td>
                           <td class="col-md-10">{{$incharge->address}}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

                     <!-- /.card-body -->

                     <div class="card-footer">
                        <a class="btn" style="background-color: rgba(86,138,161); color:white" href="{{route('incharges.index')}}"><i class="fa fa-arrow-left"></i><b> Back</b></a>
                    </div>
                  
               </div>
            </div>
            <!-- /.container-fluid -->
</section>
@endsection