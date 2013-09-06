<?php

$conn_error = 'Couldn\'t connect to the database!';  //error message in case if there is a database connection error

$mysql_host = 'localhost'; 

$mysql_user = 'root';

$mysql_pass = '';

$mysql_db = 'GRE'; //database name 

if(!@mysql_connect($mysql_host,$mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){

   die(mysql_error()); 
   
}
?>