<?php
session_start();
$uname=$_SESSION['username'];
include("connect.php");
$re=mysql_query("select * from InBox where Sender='$uname'");
?>
<br />
<table border="2" align="center" cellpadding="20" cellspacing="5">
<tr>
<th>To</th>
<th>Subject</th>
<th>Message</th>
<th>Date & Time</th>
</tr>
<?php

while($row=mysql_fetch_array($re))
{
	echo "<tr><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
}
echo "</table>";
?>