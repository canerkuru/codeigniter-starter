<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $this->config->item('site_name'); ?></title>
	<link rel="stylesheet" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>" />
	<link rel="stylesheet" href="<?php echo base_url("assets/app/css/site.css"); ?>" />	
	<link rel="stylesheet" href="<?php echo base_url("assets/datatables/css/dataTables.bootstrap.css"); ?>" />	
	<script src="<?php echo base_url("assets/jquery/js/jquery-3.2.0.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/datatables/js/jquery.dataTables.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/datatables/js/dataTables.bootstrap.js"); ?>"></script>

</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home"><?php echo $this->config->item('site_name'); ?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url("home"); ?>">Home</a></li>
                    <li><a href="<?php echo base_url("about"); ?>">About</a></li>
                    <li><a href="<?php echo base_url("news"); ?>">News</a></li>
					<li><a href="<?php echo base_url("session"); ?>">Session</a></li>
					<li><a href="<?php echo base_url("book"); ?>">Book</a></li>
					<li><a href="<?php echo base_url("todos"); ?>">Todo</a></li>
                </ul>
				        <ul class="nav navbar-nav navbar-right">
          <li><li><a href="#contact"><?php echo $this->session->firstname ?> <?php echo $this->session->lastname ?></a></li></li>
        </ul>
            </div>
        </div>
    </div>
    <div class="container body-content">
	
<div class="jumbotron">
    <h1><?php echo $this->mPageTitlePrefix; ?> <?php echo $this->mPageTitle; ?></h1>
</div>

	
