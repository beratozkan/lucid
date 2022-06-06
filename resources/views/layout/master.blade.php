<!doctype html>
<html lang="en">

<head>
<title>:: Lucid HR :: Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="Lucid Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, design by: ThemeMakker.com">
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS --> 
@yield('css')
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist.min.css">
<link rel="stylesheet" href="../assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">
<link rel="stylesheet" href="../assets/vendor/toastr/toastr.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">
@livewireStyles
</head>
<body class="theme-orange">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>        
    </div>
</div>
<!-- Overlay For Sidebars -->
<div id="wrapper">

    @include("TopNavBar")
    
       @include("LeftSideBar")
          
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">@yield("title")</li>
                        </ul>
                    </div>            
                   @include("row-text-right")
                </div>
            </div>
            @yield('section1')
           

            @yield("section2")
            @yield("section3")
            
            
        </div>
    </div>
    
</div>

<!-- Javascript -->
@yield("js")
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/toastr/toastr.js"></script>
<script src="assets/bundles/chartist.bundle.js"></script>
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob-->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/index.js"></script>

@livewireScripts

</body>
</html>