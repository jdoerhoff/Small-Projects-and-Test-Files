<?php

/*Define constant to connect to database */
$username = "cloudgrp";
$password = "tcnjcloud";
$hostname = "107.22.184.208"; 

// Make the connection:
$db = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
$selected = mysql_select_db("tictactoe",$db) 
  or die("Could not select examples");

?>