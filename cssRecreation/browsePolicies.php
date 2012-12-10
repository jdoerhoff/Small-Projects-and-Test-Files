<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{
	background-color:#051342;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
<meta name="viewport" width= device-width initial-scale=1.0>
<link rel="stylesheet" href="style/style.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.8.2.js"></script>
<!--<script language="JavaScript" type="text/javascript">
	function getcss(cssfile){

	loadcss = document.createElement('link')

	loadcss.setAttribute("rel", "stylesheet")

	loadcss.setAttribute("type", "text/css")

	loadcss.setAttribute("href", cssfile)

	document.getElementsByTagName("head")[0].appendChild(loadcss)

	}

	if(screen.width <= '500') 
	{
	
		getcss('style/phone.css'); 
	
	}
	
	else if(screen.width <= '800') 
	{
	
		getcss('style/mobile.css'); 
	
	}

	else if(screen.width > '800') 
	{
	
		getcss('style/style.css'); 
	
	}
</script> -->
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
	<div id = "quickLinks">
			<a href="my.tcnj.edu">myTCNJ</a> |
			<a href="webmail">WebMail</a> |
			<a href="socs.tcnj.edu">SOCS</a> |
			<a href="tess">TESS</a> |
			<a href="artie" >ARTIE</a> |
			<a href="yess">YESS</a> |
			<a href="directories">Directories</a> |
			<a href="calenders">Calenders</a> |
			<a href="campus maps">Campus Maps</a> |
			<a href="a-z">A-Z</a> |
			<a href="quick links">Quick Links</a>
	</div>
	<!-- header -->
	<div id = "header"></div>	
    <div id = "body">
  		<div id = "mainLinks">
			<div id = "mainLinksCells"><a href="policy development"> POLICY DEVELOPMENT</a></div>
			<div id = "mainLinksCells"><a href="browse policies">BROWSE POLICIES</a></div>
			<div id = "mainLinksCells"><a href="search policies">SEARCH POLICIES</a></div>
			<div id = "mainLinksCells"><a href="compliance">COMPLIANCE</a></div>
			<div id = "mainLinksCells"><a href="FAQ">F A Q</a></div>
		  	<div id = "mainLinksCells"><a href="Glossary of terms">GLOSSARY OF TERMS</a></div>
		</div>
		<div id = "mainBody">
			<div id = "leftColumn">
			<div id = "leftColumnCell1">BROWSE BY</div>
			<div id = "leftColumnCell2" style = "color:#000000;">NAME/TITLE</div>
			<div id = "leftColumnCell3"> <a href="#" onClick="return false" onmousedown="javascript:swapContent('SandC');">SECTION/CATEGORY</a> </div>
			<div id = "leftColumnCell3"> <a href="#" onClick="return false" onmousedown="javascript:swapContent('DEP');">DEPARTMENT</a> </div>
			<div id = "leftColumnCell4"> <a href="#" onClick="return false" onmousedown="javascript:swapContent('NandT');">HOME</a> </div>
			</div>
			<div id = "rightColumn">
			<div id = "rightColumnCellHead"> Name and Title <br> </div> 
			<div id = "rightColumnCellBody"> Brief description of functionality here</div>
			</div>
	  	</div>
    </div>
	<div id = "footer">
		<img src = "images/TCNJlogo.jpg" align = "center">  &nbsp;&nbsp;&nbsp; Office of General Counsel (609) 771-2734 | (c) 2009 TCNJ | WWW Disclaimer
	</div>
</div>
</div>
</body>
</html>
