<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	
	<script src="<?php echo base_url()?>files/js/jQuery.1.10.2-min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>files/js/main-min.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>files/css/main.css" />
	
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<?php echo form_open_multipart('welcome/save',array('class'=>'ajaxForm'));?>
		Nome 1: <input type="text" name="nome1"><br><br>
		Nome 2: <input type="text" name="nome2"><br><br>
		Nome 3: <input type="text" name="nome3"><br><br>
		Foto 1: <input type="file" name="foto1"><br><br>
		Foto 2: <input type="file" name="foto2"><br><br>
		Foto 3: <input type="file" name="foto3"><br><br>
		<input type="submit" value="Enviar">
		<?php echo form_close();?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>