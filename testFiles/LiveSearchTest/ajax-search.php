<?php


include('database_connection.php');

$keyword = $_GET['keyword'];



$query = "select First,Last from testNames where First like '%$keyword%' or Last like '%$keyword%'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result)) {
   echo ("<p>". $row{'First'}." ".$row{'Last'}."<br> </p>");
}
?>