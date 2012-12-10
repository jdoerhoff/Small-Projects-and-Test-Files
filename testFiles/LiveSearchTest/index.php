<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
<title>Live Search Using Jquery,Mysql and PHP</title>
<script type="text/javascript" src="scripts/jquery-1.8.2.js"></script>
<script type="text/javascript">
	$(document).ready(function() 
	{
		$("#faq_search_input").keyup(function()
		{
			var faq_search_input = $(this).val();
			if(faq_search_input.length>0)
			{
				faq_search_input = 'keyword='+ faq_search_input;
				$.ajax({
					type: "GET",
					url: "ajax-search.php",
					data: faq_search_input,
					success: function(server_response)
					{	
						$('#searchresultdata').html(server_response).show();
					}
				});
			}
			if(faq_search_input.length == 0)
			{
				document.getElementById('searchresultdata').innerHTML = "";
			}
			return false;
		});
	});
	  
</script>
</head>
<body>
	<div>
		<!-- The Searchbox Starts Here  -->
		<input  name="query" type="text" id="faq_search_input" /> <br>
		<!-- The Searchbox Ends  Here  -->
	</div>
	<div id="searchresultdata"> 
	</div>
</body>
</html>