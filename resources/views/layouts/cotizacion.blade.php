<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--  <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">-->
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('/css/util.css') }}">-->
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor/perfect-scrollbar/perfect-scrollbar.css') }}">-->
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor/select2/select2.min.css') }}">-->
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor/animate/animate.css') }}">-->
    <!--<link rel="stylesheet" type="text/css" href="{{ asset('/css/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.8/dist/sweetalert2.all.min.js"></script>


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    
    <title>Document</title>
</head>
<body>
    <style>
        .btn-warning{
            background-color: #3097D1;
            color: #fff;
            border-color: #3097D1;
        }

        .btn-warning:hover{
            background-color: #2579a9;
            color:#fff;
        }

        .table-warning th{
            background-color: #3097D1;
        }

        .table-warning tr{
            background-color: #c2e0f2;
        }
        .table-warning td{
            background-color: #83c0e5;
        }
        .table-warning tr:nth-child(even) {
            background-color: #83c0e5;
        }

        
    </style>
    <div id="app">
    @yield('content')
        
    </div>
        
    <!--<script  src="{{asset('/js/app.js')}}"></script>-->
    <!--  <script src="{{ asset('/css/vendor/jquery/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ asset('/cssvendor/select2/select2.min.js') }}"></script>

    <script src="{{ asset('/css/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('/css/js/main.js') }}"></script>-->
</body>



</html>
