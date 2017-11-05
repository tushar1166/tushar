<?php
//sessions
session_start();
//connect to database
mysql_connect("localhost","root","")or die();
mysql_select_db("test")or die();

//login check function
function loggedin()
{
 if(isset($_SESSION['username'])||isset($_COOKIE['username']))
 {
 $loggedin=TRUE;
 return $loggedin;
 }
}
?>