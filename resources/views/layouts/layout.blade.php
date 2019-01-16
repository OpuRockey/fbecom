
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ url('/') }}/public/vendor/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ url('/') }}/public/vendor/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="{{ url('/') }}/public/vendor/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('/') }}/public/vendor/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

@yield('content')


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ url('/') }}/public/vendor/vendor/jquery/jquery.min.js"></script>
<script src="{{ url('/') }}/public/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ url('/') }}/public/vendor/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="{{ url('/') }}/public/vendor/vendor/chart.js/Chart.min.js"></script>
<script src="{{ url('/') }}/public/vendor/vendor/datatables/jquery.dataTables.js"></script>
<script src="{{ url('/') }}/public/vendor/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ url('/') }}/public/vendor/js/sb-admin.min.js"></script>

<!-- Demo scripts for this page-->
<script src="{{ url('/') }}/public/vendor/js/demo/datatables-demo.js"></script>
<script src="{{ url('/') }}/public/vendor/js/demo/chart-area-demo.js"></script>

</body>

</html>
