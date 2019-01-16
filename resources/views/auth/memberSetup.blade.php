@extends('layouts.layout')
@section('title','Member Set up')
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


                <!-- DataTables Example -->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-user"></i>
                        {{ $userDetails->name }} - {{ $user['usertype'] }}<br>
                        <i class="fas fa-envelope"></i>
                        {{ $userDetails->email }}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                </tr>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>

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