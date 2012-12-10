<!DOCTYPE html>
<html>
<head>
<?php include ("includes/incStyleHeader.php"); ?>
<link rel="stylesheet" media="screen and (min-device-width: 1100px)" href="style/style.css" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="scripts/jquery-1.8.2.js"></script>
<script language="JavaScript" type="text/javascript">

function swapContent(cv) {
    $("#rightColumn").html('<img src="images/ajax_loader.gif" height = "50px" width = "50px"/>').show();
    var url = "includes/incBodySwitch.php";
    $.post(url, {contentVar: cv} ,function(data) {
       $("#mainBody").html(data).show();
    });
}

</script>
</head>
<body>
	<div id = "container">
    <div id = "wrapper">
	<!-- Quick Links -->
	<?php include ("includes/incQuickLinks.php"); ?>
	<!-- header -->
	<?php include ("includes/incHeader.php"); ?>
	<div id = "body">
  		<?php include ("includes/incMainLinks.php"); ?>
		<div id = "mainBody">
		<?php 
			include ("includes/incNavColumn.php");
			include ("includes/incBodyColumn.php");
	  	?>
	  	</div>
    </div>
	<?php include ("includes/incFooter.php"); ?>
</div>
</div>
</body>
</html>
