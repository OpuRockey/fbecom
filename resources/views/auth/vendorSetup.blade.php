@extends('layouts.layout')
@section('title','Vendor Set up')
@section('content')

    <!-- Top navbar Start -->
    @include('common/topnav')
    <!-- Top navbar end-->

    <div id="wrapper">

        <!-- Left navbar Start -->
    @include('common/leftnav')
    <!-- Left navbar end -->

        <div id="content-wrapper">

            <div class="container-fluid">

                <!-- Breadcumb Start -->
            @include('common/breadcumb')
            <!-- Breadcumb end -->

                <form action="{{ url('userSetupAttempt') }}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="fb_id" value="{{ $currentUserObj->id }}">
                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <i class="fas fa-user"></i>
                                {{ $currentUserObj->name }} <br>
                                <i class="fas fa-envelope"></i>
                                {{ $currentUserObj->email }} <br>
                                <i class="fas fa-at"></i>
                                {{ $currentUserType }}
                            </div>
                            <div class="col-lg-6 text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Active Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($userPages as $userpage)
                                    <tr>
                                        <td>{{ $userpage['id'] }}</td>
                                        <td>{{ $userpage['name'] }}</td>
                                        <td>{{ $userpage['category'] }}</td>
                                        <td><input type="radio" name="activePage" value="{{ $userpage['id'] }}_{{ $userpage['access_token'] }}"></td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Active Status</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
                </form>
            </div>
            <!-- /.container-fluid -->

            <!-- Copyright Start -->
        @include('common/copyright')
        <!-- Copyright end -->

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->


@endsection