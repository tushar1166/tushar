 <html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="images/icon.jpg" rel="shortcut icon" type="images/icon.jpg">
<link rel="stylesheet" type="text/css" href="css/register.css">
<title>Welcome to mailBOX!</title>
</head>
<body><div class="style7" align="right" style=" rigt margin:100px">
 <span class="sign-in"><a href="index.php"><font color="#FF0000" size="+2">Sign in</font></a></span></div></div>
<div id="Layer1" bgcolor="#CCCCCC" style="right: 48px; top: 140px; height: 400px; width:350px" class="style2">
<div id="reg"><h3 align="center" style="font:color:#000000"><u>Enter Your Details</u></h3>
<form action="" method="post" style="">
Enter first name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" class="reg_text"><br><br>
Enter last name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname"><br><br>
Choose your username:<input type="text" name="uname" class="reg_text"><br><br>
Create a password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pass"><br><br>
Confirm your password:<input type="password" name="cfpass"><br>
Birthday
<select name="bd_date">
<option >Date</option>
<?php
for($i=1;$i<=31;$i++)
{echo"<option >$i</option>";}
?>

</select>
<select name="bd_month">
<option selected="selected">Month</option>
<option value='1'>January</option>
<option value='2'>February</option>
<option value='3'>March</option>
<option value='4'>April</option>
<option value='5'>May</option>
<option value='6'>June</option>
<option value='7'>July</option>
<option value='8'>August</option>
<option value='9'>September</option>
<option value='10'>October</option>
<option value='11'>November</option>
<option value='12'>December</option>
</select> 
<select name="bd_year">
<option>Year</option>
<?php
for($j=1950;$j<=2017;$j++)
{
echo "<option >$j</option>";
}
?>

</select><br>
Gender:<br>Male<input type="radio" name="gender" value="male">&nbsp;<br>Female<input type="radio" name="gender" value="female">&nbsp;<br><br>
Mobile phone:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" class="reg_text" name="mobile" maxlength="10"><br>
Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select id="country" name="country">
<option>Country</option>
<option value="Afganistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option
><option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bonaire">Bonaire</option>
<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
<option value="Brunei">Brunei</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Canary Islands">Canary Islands</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Channel Islands">Channel Islands</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Island">Cocos Island</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cote DIvoire">Cote D'Ivoire</option>
<option value="Croatia">Croatia</option>
<option value="Cuba">Cuba</option>
<option value="Curaco">Curacao</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option
><option value="Falkland Islands">Falkland Islands</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option><option value="Finland">Finland</option>
<option value="France">France</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Ter">French Southern Ter</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Great Britain">Great Britain</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Hawaii">Hawaii</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Isle of Man">Isle of Man</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Korea North">Korea North</option>
<option value="Korea Sout">Korea South</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Laos">Laos</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libya">Libya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia</option>
<option value="Madagascar">Madagascar</option>
<option value="Malaysia">Malaysia</option>
<option value="Malawi">Malawi</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Midway Islands">Midway Islands</option>
<option value="Moldova">Moldova</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Nambia">Nambia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherland Antilles">Netherland Antilles</option>
<option value="Netherlands">Netherlands (Holland, Europe)</option>
<option value="Nevis">Nevis</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau Island">Palau Island</option>
<option value="Palestine">Palestine</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Phillipines">Philippines</option>
<option value="Pitcairn Island">Pitcairn Island</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Republic of Montenegro">Republic of Montenegro</option>
<option value="Republic of Serbia">Republic of Serbia</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russia</option>
<option value="Rwanda">Rwanda</option>
<option value="St Barthelemy">St Barthelemy</option>
<option value="St Eustatius">St Eustatius</option>
<option value="St Helena">St Helena</option>
<option value="St Kitts-Nevis">St Kitts-Nevis</option>
<option value="St Lucia">St Lucia</option>
<option value="St Maarten">St Maarten</option>
<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
<option value="Saipan">Saipan</option>
<option value="Samoa">Samoa</option>
<option value="Samoa American">Samoa American</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome & Principe">Sao Tome &amp; Principe</option>
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra Leone">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="Spain">Spain</option>
<option value="Sri Lanka">Sri Lanka</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syria</option>
<option value="Tahiti">Tahiti</option>
<option value="Taiwan">Taiwan</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Erimates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States of America">United States of America</option>
<option value="Uraguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Vatican City State">Vatican City State</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Vietnam</option>
<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
<option value="Wake Island">Wake Island</option>
<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
<option value="Yemen">Yemen</option>
<option value="Zaire">Zaire</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select><br><input type="submit" name="register" value="Create Account">
</form>
</div>
</div>
<div style="height: 113px;">
  <h1 class="style9">&nbsp;&nbsp;&nbsp;
	<img alt="mailBOX!" src="image/logo_3.jpg" height="57" width="188"></h1>
</div>

<table style="width: 57%; height: 293px;" class="style10" cellpadding="0">
	<tbody><tr>
		<td style="width: 101px;">
		<img alt="" src="image/00.jpg" height="80" width="84"></td>
		<td class="style11" colspan="3" >Email by mailBOX</td>
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
		<td style="width: 161px;"><a href="index.php" class="style6">About mailBOX</a></td>
		<td style="width: 174px;"><a href="register.php" class="style6">Create an account</a></td>
		<td><a href="index.php" class="style6">About us</a></td>
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
<p class="style12"><font size="+1"><b>� mailBOX.com 2013</b></font></p>

<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
</body></html>
<?php
$Enterfirstname=$_POST['fname'];
$Enterlastname=$_POST['lname'];
$Chooseyourusername=$_POST['uname'];
$Createapassword=$_POST['pass'];
$Confirmpassword=$_POST['cfpass'];
$date=$_POST['bd_date'];
$month=$_POST['bd_month'];
$year=$_POST['bd_year'];
$dob="$date/$month/$year";
$Gender=$_POST['gender'];
$mobilephone=$_POST['mobile'];
$Country=$_POST['country'];
//connection
$con=mysql_connect("localhost","root","");
//creation
$con="create database mailbox";
$res=mysql_query($con);
//select
$db=mysql_select_db("test");
//create of table
$c="create table register(uid int auto_increment,fname varchar(20),lname varchar(20),uname varchar(20),pass varchar(20),cfpass varchar(20),dob  varchar(20),gender varchar(10),mobile bigint,country varchar(30),primary key(uid))";
$res=mysql_query($c);                     
if($_POST['register'])
{
 if(empty($Enterfirstname)||empty($Enterlastname)||empty($Chooseyourusername)||empty($Createapassword)||empty($Confirmpassword)||empty($dob)||empty($Gender)||empty($mobilephone)||empty($Country))
	{
		echo "<script>alert('Any field must not be blank');</script>";
	}
	else
	{
		$ins="insert into register (fname,lname,uname,pass,cfpass,bd_date,gender,mobile,country)values('$Enterfirstname','$Enterlastname','$Chooseyourusername','$Createapassword','$Confirmpassword','$dob','$Gender','$mobilephone','$Country')";
		$res = mysql_query($ins);
		echo "<script>alert('One New User Registered!.....');</script>";
		echo "<script>window.location='http://localhost/mailbox/index.php';</script>";
	}
	
}
?>
