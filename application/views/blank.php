<html>
<head>
<title>
<?php //echo $isinvoice;?>
</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/print.css'); ?>">
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.0.0.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-barcode.js"); ?>"></script>
</head>
<body>
<?php 
$this->load->view('includes/table/'.$page);
?>
</body>
</html>