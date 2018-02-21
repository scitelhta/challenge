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



    <link href="<?php echo base_url(); ?>static/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/css/challenge.css" rel="stylesheet">
    <!--script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script-->
    <script src="<?php echo base_url(); ?>static/js/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/ui-bootstrap-tpls-2.5.0.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/angular-animate.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/angular-route.min.js"></script>
    <script src="<?php echo base_url(); ?>static/js/challenge.js"></script>

</head>
<body>
{{prueba}}

</body>
</html>
