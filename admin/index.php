<?php include('header.php'); 
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<body class="body"  id="login">
    <div class="container">
		<div class="row-fluid">
			<div class="span6"><div class="title_index"><?php include('title_index.php'); ?></div></div>
			<div class="span6"><div class="pull-right"><?php include('login_admin.php'); ?></div></div>
		</div>
		<div class="row-fluid">
           <div class="offset2">		
			   <div class="span11"><div class="index-footer"><?php include('link.php'); ?></div></div>		
		   </div>
	    </div>
		
			<?php include('footer.php'); ?>
    </div>
<?php include('script.php'); ?>
</body>

</html>