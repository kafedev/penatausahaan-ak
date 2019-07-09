<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Aplikasi Penatausahaan Alat Keterangan</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/form-validation.css') ?>">
	<?php foreach ($css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
	<?php endforeach; ?>
	<style>
		.container{
			
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="py-5 text-center">
			<h2>Aplikasi Penatausahaan Alat Keterangan</h2><br>
			<p class="lead"><a href="<?php echo site_url(''); ?>">Beranda</a> &dash; <a target="blank" href="<?php echo site_url('tabel');?>">Tabel Data</a></p>
			<p class="lead"><a href="<?php echo site_url('view/type/kpp_sendiri'); ?>">KPP Sendiri</a> &dash; <a target="blank" href="<?php echo site_url('view/type/kpp_lain');?>">KPP Lain</a> &dash; <a target="blank" href="<?php echo site_url('view/type/kpp_lain');?>">KPKNL</a> &dash; <a target="blank" href="<?php echo site_url('view/type/kpp_lain');?>">PPAT</a></p>
		</div>