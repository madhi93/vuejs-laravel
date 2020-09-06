<?php 
session_start();
error_reporting(0);
if(!isset($_SESSION['mail']))
{
    echo "<script>alert('Please login to continue');window.location='../login.php';</script>";
}
    
include 'include/db.php'; 

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="Admin Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase.js"></script>


    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script type="text/javascript" src="assets/js/js2.js"></script>
    <script type="text/javascript" src="assets/js/function.js"></script>
    <script type="text/javascript" src="assets/js/config.js"></script>
    <script type="text/javascript" src="assets/js/signup.js"></script>
    
</head>

<body alink="white">


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <img src="favicon.ico" alt="Logo" class="d-inline" width="30px" height="30px">&nbsp;&nbsp;&nbsp;<a class="navbar-brand d-inline" href="./"><label class="text-dark">Hire Local</label></a>
                <a class="navbar-brand hidden" href="./"><img src="favicon.ico" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <!-- /.menu-title -->
                    <li> <!-- general settings -->
                        <a href="generalsetting.php"> <i class="menu-icon fa fa-cogs"></i> General Settings </a>
                    </li>
      <li> <!-- recordings --> <a href="QA.php"> <i class="menu-icon fa fa-question"></i> Question & Answer </a> </li>
<li> <!-- Email --> <a href="invoice.php"> <i class="menu-icon fa fa-mail-forward"></i>Send Invoice mail </a> </li>
                    <li>
                        <a href="RedeemRequest.php"> <i class="menu-icon fa fa-arrow-circle-up"></i> Redeem Request </a>
                    </li>
                  
                    <li>
                        <a href="PaymentHistory.php"> <i class="menu-icon fa fa-money" ></i> Payment History </a>
                    </li>
                    <li>
                        <a href="order-invoice.php"> <i class="menu-icon fa fa-file-text" ></i> Order and Invoices </a>
                    </li>

                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                   <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                        

                    </div>
                </div>
               <button class="btn btn-outline-danger float-right" onclick="window.location='logout.php'">logout</button>
            </div>

        </header><!-- /header -->
        <!-- Header-->