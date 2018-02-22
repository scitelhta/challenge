<?php
/**
 * Created by PhpStorm.
 * User: luzdeagosto
 * Date: 20/02/2018
 * Time: 21:24
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en"  ng-app="challengeApp" ng-controller="challengeController">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Challenge</title>

    <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>static/img/Challenge16.png"/>

    <link href="<?php echo base_url(); ?>static/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,600'>
    <link href="<?php echo base_url(); ?>static/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/css/sidebar.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/css/challenge.css" rel="stylesheet">
    <!--script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script-->
    <script src="<?php echo base_url(); ?>static/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/js.cookie.js"></script>
    <script src="<?php echo base_url(); ?>static/js/parsley.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/ui-bootstrap-tpls-2.5.0.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/angular-animate.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/angular-route.min.js"></script>

</head>
<body>
<div id="sidebar-wrapper" class="sidebar" ng-class="{sideactive:toggles[1]}" ng-click="toggle(1)">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a  href="#!/">
                <img class="clogo" src="<?php echo base_url(); ?>static/img/Challenge16.png"/>
            </a>
        </li>
        <li><hr></li>
        <li>
            <a  href="#!/cursos"><i class="fa fa-map-marker famenu"></i><span class="fsmenu">Cursos</span></a>
        </li>
        <li>
            <a href="#!/materias"><i class="fa fa-calendar famenu"></i><span class="fsmenu">Materias</span></a>
        </li>
        <li>
            <a href="#!/categorias"><i class="fa fa-users famenu"></i><span class="fsmenu">Categorias</span></a>
        </li>
        <li><hr></li>

        <li ng-if="!login.logged">
            <a href="#!/login"><i class="fa fa-sign-in famenu"></i><span class="fsmenu">Ingresar</span></a>
        </li>
        <li ng-if="login.logged">
            ({{usuario}})<br>
            <a ng-click="logout()"><i class="fa fa-sign-out famenu"></i><span class="fsmenu">Salir</span></a>
        </li>

    </ul>

</div>



<div class="header">
    <div class="menu"><img src="<?php echo base_url(); ?>static/img/menu.png" ng-click="toggle(1)"/></div>
    <div class="logo"><img src="<?php echo base_url(); ?>static/img/Challenge16.png"/></div>

</div>

<ng-view></ng-view>


</body>

<script src="<?php echo base_url(); ?>static/js/style.js"></script>
<script src="<?php echo base_url(); ?>static/js/challenge.js"></script>


</html>
