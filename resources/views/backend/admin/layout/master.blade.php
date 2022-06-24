<!doctype html>
<html lang="en">

<!-- Mirrored from vetra.laborasyon.com/demos/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 17:28:47 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Jossgift | E-Commerce Go On </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('fontend/jossgift_logo.jpg')}}"/>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="{{asset('fontend/main/dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css')}}" type="text/css">
    <!-- Bootstrap Docs -->
    <link rel="stylesheet" href="{{asset('fontend/main/dist/css/bootstrap-docs.css')}}" type="text/css">

        <!-- Slick -->
    <link rel="stylesheet" href="{{asset('fontend/main/libs/slick/slick.css')}}" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href="{{asset('fontend/main/dist/css/app.min.css')}}" type="text/css">
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- preloader -->
<div class="preloader">
    <img src="{{asset('fontend/jossgift_logo.jpg')}}" alt="logo">
    <div class="preloader-icon"></div>
</div>
<!-- ./ preloader -->
    @include('backend.admin.layout.sidebar')
<!-- sidebars -->

    <!-- ./ header -->

    <!-- content -->
   
     @yield('content')
    <!-- ./ content -->

    <!-- content-footer -->
  
    <!-- ./ content-footer -->

</div>
<!-- ./ layout-wrapper -->

<!-- Bundle scripts -->
<script src="{{asset('fontend/main/libs/bundle.js')}}"></script>

<!-- Apex chart -->
<script src="{{asset('fontend/main/libs/charts/apex/apexcharts.min.js')}}"></script>

<!-- Slick -->
<script src="{{asset('fontend/main/libs/slick/slick.min.js')}}"></script>

<!-- Examples -->
<script src="{{asset('fontend/main/dist/js/examples/dashboard.js')}}"></script>

<!-- Main Javascript file -->
<script src="{{asset('fontend/main/dist/js/app.min.js')}}"></script>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    $(function () {
      
      var table = $('.data-table').DataTable({
          processing: false,
          serverSide: false,
      });
      
    });
  </script>
<!-- Mirrored from vetra.laborasyon.com/demos/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Jun 2022 17:29:44 GMT -->
</html>
