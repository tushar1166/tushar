  <?php
include 'functions.php';
//check if logged in already
if(loggedin()==TRUE)
{
 header("Location:account.php");
 exit();
}
if(isset($_POST['login']))
{
//get data
$username=$_POST['uname'];
$password=$_POST['pass'];
$rememberme=$_POST['rememberme'];

 if($username&&$password)
 {
 $login=mysql_query("select * from register where uname='$username'");
   while($row=mysql_fetch_assoc($login))
   {
    $db_password=$row['pass'];
    //if(md5($password)==$db_password)
	if($password==$db_password)
     $loginok=TRUE;
    else
    $loginok=FALSE;
   }
   if($loginok==TRUE)
   {
   if($rememberme=="on")
   setcookie("username",$username,time()+7200);
   else if($rememberme=="")
   $_SESSION['username']=$username;
   header("Location:index.php");
   exit();
   }
   else
   $msg="<font color=red>Username/password combination incorrect</font>";
 }
  else
  die("Hit back and enter a username and password.");
}
?>

<html><head>
<link rel="stylesheet" type="text/css" href="css/index.css">
<title>Welcome to mailBOX!</title>
</head>
<body>
 <div id="Layer1" bgcolor="#CCCCCC" style="right: 80px; top: 184px; height: 300px;" class="style2"> 
  <form method="POST" action="">&nbsp;&nbsp;
    <h3>&nbsp;&nbsp; Sign In&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span class="style3"><span class="style4"><span class="style5">mailBOX<br>
    </span></span></span>
    <hr>
	</h3>
    <p></p><p>&nbsp;&nbsp; Username&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<input name="uname" style="width: 162px"  type="text">
</p><p>&nbsp;&nbsp; Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input name="pass" style="width: 162px"  type="password">
  <br>
    
           	</p><p align="right"><input type="checkbox" name="rememberme"><lable>Remember me
			</lable></p>
   	<p style="height: 61px;" class="style1">&nbsp; 
	<input name="login" value="Sign in" style="width: 98px; height: 34px;" type="submit">
			<br>
			<br>
			<a href="register.php">Don't have an account?</a>
  	</p>
   </form>
</div>
<div style="height: 113px;">
  <h1 class="style9">&nbsp;&nbsp;&nbsp;
	<img alt="mailBOX!" src="image/logo_3.jpg" height="57" width="188"></h1>
  <h3 style="height: 31px;" align="right"><font color="#660000">New to mailBOX? 
	<a href="register.php">
	<img alt="Create an account" src="image/1Untitled_2.jpg"class="style7" height="30" width="162"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></h3>
</div>
<p><br>
</p>
<table style="width: 57%; height: 293px;" class="style10" cellpadding="0">
	<tbody><tr>
		<td style="width: 101px;">
		<img alt="" src="image/00.jpg" height="80" width="90"></td>
		<td class="style11" colspan="3">Email by mailBOX</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 101px; height: 12px;"></td>
		<td colspan="3" style="height: 12px;"></td>
		<td style="height: 12px;"></td>
	</tr>
	<tr>
		<td style="width: 101px;">&nbsp;</td>
		<td style="width: 38px;" rowspan="2">
		<img alt="" src="image/images.jpg" height="43" width="48"></td>
		<td style="width: 38px;" rowspan="3">&nbsp;</td>
		<td class="style14">Fast and Easy</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 101px;">&nbsp;</td>
		<td>An efficient and useful email service by mailBOX</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 101px;">&nbsp;</td>
		<td style="width: 38px;">&nbsp;</td>
		<td>Faster and easily accessible emails</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 101px;">&nbsp;</td>
		<td><img alt="" src="image/images (2).jpg" height="37" width="54"></td>
		<td>&nbsp;</td>
		<td class="style14">Secured emails</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 101px;">&nbsp;</td>
		<td colspan="2">&nbsp;</td>
		<td>All your mails secured with mailBOX</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td style="width: 101px;">&nbsp;</td>
		<td colspan="3">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
	</tbody></table>
<table style="width: 60%;" class="style13">
	<tbody><tr>
		<td style="width: 128px;">&nbsp;</td>
		<td style="width: 161px;"><a href="index.php" class="style6"></a></td>
		<td style="width: 174px;"><a href="register.php" class="style6">Create an account</a></td>
		<td><a href="index.php" class="style6"></a></td>
	</tr>
	<tr>
		<td style="width: 128px;">&nbsp;</td>
		<td style="width: 161px;">&nbsp;</td>
		<td style="width: 174px;">&nbsp;</td>
		<td>&nbsp;</td>
	</tr>
</tbody></table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<hr style="width: 1120px;">
<p class="style12"><font size="+1"><b>�Tushar@2016</b></font></p>
<p class="style12">&nbsp;</p>
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
</body></html>
