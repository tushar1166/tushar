<?php
session_start();
$uname=$_SESSION['username'];
include("connect.php");
$res=mysql_query("select * from draft where Sender='$uname'");
?><style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<br />
<table border="2" align="center" cellpadding="10" cellspacing="5">
<tr>
<th>From</th>
<th>To</th>
<th>Subject</th>
<th>Message</th>
<th>Date</th>
</tr>
<?php
 while($row=mysql_fetch_array($res))
{
 echo "<tr><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
}
echo "</table>";
?>