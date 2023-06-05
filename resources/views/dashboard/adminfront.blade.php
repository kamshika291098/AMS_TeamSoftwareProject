@extends('dashboard.admindashboard')

@section('admindash')
    @if ($message = Session::get('error'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" style="color: rgb(145, 36, 46);"><i class="fa fa-times"></i></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <button type="button" class="close" style="color: rgb(145, 36, 46);" data-dismiss="alert"><i class="fa fa-times"></i></button>
            <strong><i class="fa fa-exclamation-triangle"></i> Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <strong><i class="fa fa-check"></i></strong>
            <button type="button" class="close" style="color: rgb(28, 115, 48);" data-dismiss="alert"><i class="fa fa-times"></i></button>
            <strong>{{ session('success') }}</strong>
        </div>
    @endif

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: rgb(86, 138, 161);"><span class="fa fa-tachometer-alt"></span> Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <br>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-building"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Organizations</span>
                            <span class="info-box-number">{{ $organizationcount }}</span>
                        </div>

                        <a href="{{ route('organizations.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-success elevation-1"><i class="fa fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Incharges</span>
                            <span class="info-box-number">{{ $inchargecount }}</span>
                        </div>

                        <a href="{{ route('incharges.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- Add more info-box sections as needed -->
            </div>
        </div>
    </section>
@endsection
