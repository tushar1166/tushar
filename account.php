<?php
include 'functions.php';
$uname=$_SESSION['username'];

if(loggedin()==FALSE)
{
 header("Location:index.php");
 exit();
}
?>

<html>
<head>
<title>
WEB DESINING
</title>
<style>
body{
	margin:0;
	margin-left: 0px;
}
</style>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<link rel="stylesheet" type="text/css" href="css/V_Menu.css">
<script type="text/javascript"></script>
<script type="text/javascript"> 
$(document).ready(function(){
  $("button").click(function(){
    $("div1").animate({left:"50px"},"slow");
    $("div1").animate({fontSize:"2em"},"slow");
  });});
  </script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<div id="mainbody">
<div id="wrapper">
<div id="header">
<img src="image/icon_2.jpg" width="200"></img></img>
<a href="logout.php"><img src="image/logout-button-purple-hi.png" align="right" width="100"></a></div>
<div id="center">
<div class="left">
<ul class="menu">
   <li><a href="compose.php" target="a">Compose</a></li>
   <li><a href="inbox.php" target="a">InBox</a></li>
   <li><a href="sent.php" target="a">SENT</a></li>
   <li><a href="draft.php" target="a">DRAFT</a></li>
 </ul>
</div>
<div class="contents" id="content">
<button>Start Animation</button>
<div1 style="background:#98bf21;height:500px;width:50px;position:relative"><?php echo "Welcome ".$uname;?></div> 
<br>
<iframe name="a" height="1000" width="1000" src="inbox.php" scrolling="no" frameborder="0"></iframe>
</div>
</div>
<div id="footer"><p class="style12" align="center"><font size="+1"><b>© mailBOX.com</b></font></p></div>
</div></div></img>
</body>
</html>

