@extends('layouts.layout')
@section('title','Dashboard')
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
                        <div class="row">
                            <div class="col-lg-6">
                                <i class="fas fa-user"></i>
                                Name  : {{ $userDetails->name }}<br>
                                <i class="fas fa-user"></i>
                                Type  : {{ $user['usertype'] }}<br>
                                <i class="fas fa-envelope"></i>
                                Email :{{ $userDetails->email }}
                            </div>
                            <div class="col-lg-6">
                                <i class="fas fa-user"></i>
                                Page ID   :{{ $products[0]['from']['id'] }} <br>
                                <i class="fas fa-arrow-alt-circle-right"></i>
                                Page Name :{{ $products[0]['from']['name'] }}
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
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product['id'] }}</td>
                                        <td>{{ $product['message'] }}</td>
                                        <td>{{ $product['created_time']->format('Y-m-d H:i:s') }}</td>
                                        <td><a class="btn btn-primary" href="#" data-toggle="modal" data-target="#detailModal{{ $product['id'] }}">Details</a></td>
                                        @if(array_key_exists("comments",$product))
                                        <!-- Logout Modal-->
                                        <div class="modal fade" id="detailModal{{ $product['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel{{ $product['id'] }}">
                                                            Product ID : {{ $product['id'] }} <br>
                                                            Product Name : {{ $product['message'] }}
                                                        </h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-6">ID</div>
                                                            <div class="col-lg-2">Message</div>
                                                            <div class="col-lg-4">Date</div>
                                                        </div>
                                                        @php
                                                            $productCountSlug = 0
                                                        @endphp
                                                        @foreach($product['comments'] as $productComment)
                                                            @if(rtrim(ltrim($productComment['message'])) == '#1+')
                                                                @php
                                                                    $productCountSlug = 1
                                                                @endphp
                                                            <div class="row">
                                                                <div class="col-lg-6">{{ $productComment['id'] }}</div>
                                                                <div class="col-lg-2">{{ $productComment['message'] }}</div>
                                                                <div class="col-lg-4">{{ $productComment['created_time']->format('Y-m-d H:i:s') }}</div>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                        @if($productCountSlug == 0)
                                                            <div class="row">
                                                                <div class="col-lg-12">No Data Found</div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    </tr>
                                @endforeach
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