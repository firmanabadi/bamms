<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pengajuan Surat Perintah Jalan SCTV</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/fonts/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="<?php echo base_url('assets/css/custom.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/icheck/flat/green.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/floatexamples.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/css/bootstrap-datetimepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-datetimepicker.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/locales/bootstrap-datetimepicker.fr.js'); ?>" type="text/javascript"></script>
    <style type="text/css">
    	table {
    		margin-left: 5%;
    		border: 1px solid #2a3f54;
    	}

    	th {
    		padding: 0% 1% 0% 1%;
    		border: 1px solid;
    		text-align: center;
    	}

    	tr.head {
    		background-color: #2a3f54;
    		color: #ffffff;
    	}

    	tr {
    		text-align: center;
    	}

    	td {
    		padding: 1% 1% 1% 1%;
    		text-align: center;
    		border: 1px solid #2a3f54;
    	}
    </style>
</head>
<body>
	<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h4>Registration</h4>
	            <ul class="nav navbar-right panel_toolbox">
	                </ul>
	                <div class="clearfix">
	                </div>
	            </div>
	            <div class="x_content">
	            	<br />
	            	<div class="form-group">
	                    <div class="col-md-12 col-sm-6 col-xs-12 col-md-offset-3">
	                        
	                    </div>
	                </div>
	                <form id="demo-form2" method="post" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo site_url(''); ?>">
	                <!-- Dinas -->
	                <div class="form-group">
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
	                        Name
	                    </label>
	                    <div class="input-group col-md-3 col-sm-6 col-xs-6">
	                        <input id="name" name="name" class="form-control col-md-3 col-xs-12" type="text"
                            	value="">
	                    </div>
	                </div>

                	<div class="form-group">
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
	                        Phone
	                    </label>
	                    <div class="input-group col-md-3 col-sm-6 col-xs-6">
	                        <input id="phone" name="phone" class="form-control col-md-3 col-xs-12" type="text"
                            	value="">
	                    </div>
                	</div>

                	<div class="form-group">
	                    <label class="control-label col-md-3 col-sm-3 col-xs-12">
	                        Address
	                    </label>
	                    <div class="input-group col-md-3 col-sm-6 col-xs-6">
	                        <input id="address" name="address" class="form-control col-md-3 col-xs-12" type="text"
                            	value="">
	                    </div>
                	</div>

	                <div class="form-group">
	                    <div class="col-md-12 col-sm-6 col-xs-12 col-md-offset-3">
	                        <button type="submit" class="btn btn-success" formaction="<?php echo site_url('Registrasi_C/submit'); ?>">
	                            Submit</button>
	                    </div>
	                </div>
	            </div>
</body>