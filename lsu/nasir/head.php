<?php
include'connect.php';
include'functions.php';
logincontrol();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf8_tukish_ci" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSU CONTROL PANEL BY NASIR</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FILE UPLOAD CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap-fileupload.min.css">
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">LANKARAN STATE UNIVERSITY<br>
                </a>
            </div>
            <div style="float: left"><h1 style="font-family: arial;color: white">İdarəetmə paneli</h1></div>
            <div class="header-right">
                <a href="logout.php" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle">Təhlükəsiz çıxış</i></a>

            </div>
        </nav>