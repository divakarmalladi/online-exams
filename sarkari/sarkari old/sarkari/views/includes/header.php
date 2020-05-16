<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo isset($seodata->home->metadesc)?$seodata->home->metadesc:'sarkari jobs,govt jobs';?>">
    <?php 
    $currenturl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
    <link rel="canonical" href="<?php echo $currenturl;?>" />

    <meta name="author" content="">

    <title><?php echo isset($seodata->home->metatitle)?$seodata->home->metatitle:'sarkari jobs,govt jobs';?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<style>
    .jobcat {
        padding-right: 0px !important;
        padding-left: 0px !important;
    }

    .demo {
        padding: 30px;
        min-height: 280px;
    }

    * {
        box-sizing: border-box
    }

    .list-group-item {
        border: 0px !important;
    }

    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #fff;
        width: 30%;
        height: 300px;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #007bff;
        color: #fff;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 12px;
        border: 1px solid #ccc;
        width: 70%;
        border-left: none;
        height: 300px;
    }

    .h1,
    h1 {
        font-size: 1.5rem !important;
    }

    .seohead {
        text-decoration: underline;
        color: #007bff;
        font-size: 22px;
        background-color: #fff;
        font-family: Arial;

    }

    .logo {
        color: #007bff !important;
        font-size: 24px !important;

    }

    .seobody {
        font-size: 16px;
        color: #000000;
        font-family: Arial;
        text-align: center;
    }

    .row {
        width: 100% !important;
        max-width: 100% !important;

        margin-left: 0px !important;
        margin-right: 0px !important;
    }

    .container {
        width: 100% !important;
        max-width: 100% !important;

        padding-right: 0px !important;
        padding-left: 0px !important;
        margin-left: 0px !important;
        margin-right: 0px !important;

    }

    .glow {
        font-size: 16px;

        color: #fff;
        text-align: center;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
    }

    @media screen and (min-width:320px) and (max-width:767px) {
        .hidden-xs {
            display: none !important;
        }
    }

    @-webkit-keyframes glow {
        from {
            text-shadow: 0 0 10px #0c0c0c, 0 0 20px #0c0c0c, 0 0 30px #fff, 0 0 40px #fff, 0 0 50px #fff, 0 0 60px #fff, 0 0 70px #fff;
        }

        to {
            text-shadow: 0 0 20px #0c0c0c, 0 0 30px rgb(200, 217, 236), 0 0 40px rgb(200, 217, 236), 0 0 50px rgb(200, 217, 236), 0 0 60px #rgb(200, 217, 236), 0 0 70px rgb(200, 217, 236), 0 0 80px rgb(200, 217, 236);
        }
    }
</style>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container my-0">
            <a class="navbar-brand logo" href="#">Sarkari notify</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sarkari results</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Admit cards</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Current affairs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mock tests</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>