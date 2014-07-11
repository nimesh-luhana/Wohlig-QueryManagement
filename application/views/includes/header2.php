<!DOCTYPE html>
<html class="sidebar_default  no-js" lang="en">
<head>
<meta charset="utf-8">
<title>Wohlig Forms</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo base_url('assets/css/images/favicon.png'); ?>">
<!-- Le styles -->
<link href="<?php echo base_url('assets/css/twitter/bootstrap.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/base.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/twitter/responsive.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/css/jquery-ui-1.8.23.custom.css'); ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/js/plugins/chosen/chosen/chosen.css'); ?>" rel="stylesheet">

<script src="<?php echo base_url('assets/js/jquery.js'); ?>" type="text/javascript"> </script> 
<script src="<?php echo base_url('assets/js/jquery-ui-1.8.23.custom.min.js'); ?>" type="text/javascript"></script> 
<script src="<?php echo base_url('assets/js/plugins/modernizr.custom.32549.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/my.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-barcode.js"); ?>"></script>
</head>
<body>
<div id="loading"><img src="<?php echo base_url('assets/img/ajax-loader.gif'); ?>"></div>
<div id="responsive_part">
  <div class="logo"> <a href="index.html"><span>Start</span><span class="icon"></span></a> </div>
  <ul class="nav responsive">
    <li>
      <button class="btn responsive_menu icon_item" data-toggle="collapse" data-target=".overview"> <i class="icon-reorder"></i> </button>
    </li>
  </ul>
</div>
<!-- Responsive part -->

<div id="main" style="padding:10px;">
  <div class="container">
    <div class="header row-fluid">
      <div class="logo"> <a href="#"><span>Wohlig Forms</span><span class="icon"></span></a> </div>
      <div class="top_right">
        <ul class="nav nav_menu">
          <li class="dropdown"> <a class="dropdown-toggle administrator" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
            <div class="title"><span class="name">Wohlig</span><span class="subtitle"></span></div>
            <span class="icon"><img src="<?php //echo base_url('assets/img/picture013.jpg'); ?>"</span></a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
              <li><a href="<?php echo site_url('login/logout'); ?>"><i class=" icon-user"></i> Log Out</a></li>
             <!-- <li><a href="forms_general.html"><i class=" icon-cog"></i>Settings</a></li>
              <li><a href="index2.html"><i class=" icon-unlock"></i>Log Out</a></li>
              <li><a href="search.html"><i class=" icon-flag"></i>Help</a></li>-->
            </ul>
          </li>
        </ul>
      </div>
      <!-- End top-right --> 
    </div>
    <div id="main_container">
    
    <?php if(isset($alertsuccess)) { ?>
<div class="alert alert-success"> <?php echo $alertsuccess;	?> </div>
<?php } ?>
<?php if(isset($alerterror)) { ?>
<div class="alert alert-error"> <?php echo $alerterror;	?> </div>
<?php } ?>
<?php if(isset($alert)) { ?>
<div class="alert"> <?php echo $alert;	?> </div>
<?php } ?>