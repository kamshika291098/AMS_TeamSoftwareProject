@extends('dashboard.admindashboard')
@section('manageincharge')
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
                        <h1 class="m-0" style="color: rgb(86,138,161);"><span class="fa fa-thin fa-shop"></span> Manage Incharges</h1>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Incharges</li>
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
           
        </div>
    </div>
    <!-- SEARCH BAR -->
    <div class="container">
        <form action="{{route('incharges.index')}}" method="GET" role="search">
            {{csrf_field()}}
            <div class="input-group">
                <input type="text" class="form-control me-2" name="q" placeholder="Search here .........">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-success"><i class="fas fa-search fa-sm"></i> Search</button>
                </span>
                <span class="input-group-btn">
                    <a href="{{ route('incharges.index') }}" class="btn btn-primary">
                        <i class="fas fa-sync fa-sm"></i> Refresh
                    </a>
                </span>
            </div>
        </form> 
    </div>
    <br/>
<div class="text-right">
   <a class="btn btn-md btn-info" href="{{route('incharges.create')}}"><i class="fa fa-thin fa-shop"></i> Add New Incharge</a>
</div>
<div class="container-fluid"><br/>
               @php
                $n=0;
                @endphp
               <div class="col-md-12">
                  <table id="incharge" class="table table-bordered table-striped">
                     <caption>Incharges</caption>
                     <thead>
                        <tr>
                        <th>ID</th>
                        <th>Incharge Name</th>
                        <th>Organization Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Position</th>
                        <th>Address</th>
                        <th><center>Action</center></th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($incharges as $incharge)
                        <tr>
                        <td>{{$incharge->id}}_{{$incharge->inchargename}}</td>
                        <td>{{$incharge->inchargename}}</td>
                        <td>{{$incharge->organization->organizationname}}</td> <!-- Display organization name -->
                        <td>{{$incharge->email}}</td>
                        <td>{{$incharge->phonenumber}}</td>
                        <td>{{$incharge->position}}</td>
                        <td>{{$incharge->address}}</td>
 
                           <td class="text-center">
                            <a href="{{route('incharges.edit', $incharge->id)}}" class="btn btn-xs btn-info">
                                <i class="fa fa-pencil-alt"></i> Edit
                            </a>
                            <a href="{{route('incharges.show', $incharge->id)}}" class="btn btn-xs btn-primary">
                                <i class="fa fa-eye"></i> Show
                            </a>
                            <form action="{{route('incharges.destroy', $incharge->id)}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="fa fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                        </tbody>    
                  </table>
                <!--  {{ $incharges->links() }} -->
                  {!! $incharges->appends(['q' => Request::get('q')])->render() !!}
               </div>
            </div>
      </div>

</section>

@endsection