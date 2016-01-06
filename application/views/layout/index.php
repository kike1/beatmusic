<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>BeatMusic - Escucha, compra y descubre la mejor música!</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("assets/css/styles.css"); ?>" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	</head>
	<body>

		 <?php if($header) echo $header; ?>
		 <?php if($middle) echo $middle; ?>
		 <?php if($footer) echo $footer; ?>
		 
		<!-- script references -->
		<script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/scripts.js"); ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

		<script type='text/javascript'>
		  // assumes you're using jQuery
		  $(document).ready(function() {
		    $('.alert').hide();
		    <?php if($this->session->flashdata('msg')){ ?> 
		          <?php if($this->session->errorlogin){ ?>
		              $('.alert').addClass("alert-danger");
		              //$('#loginModal').modal('show')
		          <?php } ?>
		              
		              $('.alert').addClass("alert-success");

		    $('.alert').html('<?= $this->session->flashdata('msg')?>').fadeIn(1500);
		    <?php } ?>
		  });
		  
		</script>
	</body>
</html>