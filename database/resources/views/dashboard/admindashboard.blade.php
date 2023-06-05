@extends('userpanel')
@section('adminpanel')

<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgba(59, 116, 123);">
                        <!-- Brand Logo -->
  
            <!-- Sidebar -->
   <div class="sidebar" style="margin-top: -65px">
               <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
		   </br>
         <div class="info">
            <a href="#" class="d-block"> {{Auth::user()->username}} ADMIN <i class="fa fa-heart-pulse"></i></a>
         </div>
      </div>
      
      <div class="modal" id="modal-row" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="demoModalLabel"><i class="fa fa-address-card fa-lg"></i> My Profile</h5>
								<button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="false">&times;</span>
								</button>
						</div>
						<div class="modal-body">
                  {{Auth::user()->username}}</br>
                  {{Auth::user()->role}}
						</div>
						<div class="modal-footer">
								<a type="button" id="model-btn" class="btn" style="background-color: rgba(59, 116, 123); color:white" href="{{route('logout')}}"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a>
						</div>
					</div>
				</div>
			</div>
               <!-- Sidebar Menu -->
      <nav class="mt-2">
         <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
               <a href="{{route('dash')}}" class="nav-link">
                  <i class="nav-icon fa fa-clinic-medical fa-shake" style="color: rgb(255, 255, 255); --fa-animation-duration: 3s;"></i>
                  <p>Dashboard</p>
               </a>
               
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
               <i class="nav-icon fa-regular fa-address-card fa-shake" style="color: rgb(255, 255, 255); --fa-animation-duration: 3s;"></i>
                  <p>My Profile</p>
               </a>
            </li>
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-thin fa-shop fa-beat"  style="color: rgb(255, 255, 255); --fa-animation-duration: 3s;"></i>
                     <p> Organizations<i class="right fas fa-angle-left" style="color: rgb(255, 255, 255);"></i></p>
               </a>
               <ul class="nav nav-treeview">
                  <li class="nav-item">
                     <a href="{{route('organizations.create')}}" class="nav-link">
                         <i class="nav-icon fa fa-plus" style="color: rgb(255, 255, 255);"></i>
                           <p>Add</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="{{route('organizations.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-cog" style="color: rgb(255, 255, 255);"></i>
                           <p>Manage</p>
                     </a>
                  </li>
               </ul>
            </li>
         
            <li class="nav-item">
               <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users-between-lines fa-beat"style="color: rgb(255, 255, 255); --fa-animation-duration: 3s;"></i>
                  <p>Incharges</p>
               </a>
            </li>
 
            
         </ul>
      </nav>
   </div>
</aside>
<div id="gradback" class="content-wrapper">
   
   @yield('adduser')
   @yield('manageuser')
   @yield('showuser')
   @yield('edituser')
   @yield('addorganization')
   @yield('manageorganization')
   @yield('showorganization')
   @yield('editorganization')
   @yield('admindash')
   @yield('searchorganization')
   
</div>
<!--<div  class = "blend">
   <img src="/img/pharmacy.png"/>
   <h1>Pharmacy</h1>
</div>-->
@endsection
