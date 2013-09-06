<?php

$conn_error = 'Couldn\'t connect!';

$mysql_host = 'localhost';

$mysql_user = 'root';

$mysql_pass = '';

$mysql_db = 'GRE';

if(!@mysql_connect($mysql_host,$mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){

   die(mysql_error());
   
}
?>