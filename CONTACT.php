<?php   
$insert=false;
if(isset($_POST['Name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
die("connection to this database failed due to".mysqli_connect_error());
}
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Mobile=$_POST['Mobile'];
$Help=$_POST['Help'];
$sql="INSERT INTO `food`.`contact` (`Name`, `Email`, `Mobile`, `Help`, `Date`) VALUES ('$Name', '$Email', '$Mobile', '$Help', current_timestamp());";

if ($con->query($sql)==TRUE){
$insert=true;
}
else{
echo "ERROR: $sql<br>$con->error";
}
$con->close();
}

?>
<html>
<head>
<title>DAAWAT</title>
<style>
html{scroll-behavior: smooth;}
</style>
<link rel="stylesheet" type="text/css" href="cssfile.css">
<link rel="stylesheet" type="text/css" href="contactcss.css">
<link rel="stylesheet" type="text/css" href="FOOTER.css">
</head>
<body>
<div id="home">
<table border ="0" width = "1516px" bgcolor ="gold" height="10%">
<tr>
<td align ="center"><font color ="black"><h1 style="font-size: 30px;"><u>ROYAL RESTAURANT</u></h1></font>
</td>
</tr>
</table>
</div>
<div id="table">
<ul>
<li><a href="SIGNEDIN.html">HOME</a></li>
<li><a href="#menu">MENU</a>
<ul>
<li><a href="starters.html"target="_blank">STARTERS</a>
<li><a href="north.html" target="_blank">NORTH INDIAN</a>
<li><a href="south.html" target="_blank">SOUTH INDIAN</a>
<li><a href="des.html"target="_blank">DESSERTS</a>
<li><a href="fast.html"target="_blank">FAST FOOD</a>
<li><a href="lunch.html"target="_blank">LUNCH</a>
<li><a href="thaali.html"target="_blank">SPECIAL THALI</a>
<li><a href="shakes.html"target="_blank">SHAKES</a>
</ul>
</li>
<li><a href="order.php">ORDER NOW</a></li>
<li><a href="ABOUT.html" target="_blank">ABOUT US</a></li>
<li><a href="CONTACT.php"target="_blank">CONTACT US</a></li>
<li><a href="#">SIGNED IN-AS GUEST</a></li>
</ul>
</div>

<br><br><br><br><h1 align="center"><b> GET IN TOUCH WITH US</b></h1><br>

<div class="contact">
<div class="contactcontent">
<div class="ordertable">
<form>
<center>
<table border="0" width="100%">
<tr>
<td width="20%">Name</td>
<td width="80%"><input type="text" Name="Name" placeholder="Name"></td>
</tr>
<td>Email</td>
<td><input type="text" Name="Email" placeholder="Email"></td>
</tr>
<td>Mobile</td>
<td><input type="text" Name="Mobile" placeholder="9876543210"></td>
</tr>
<td>WHAT CAN WE DO FOR YOU</td>
<td><textarea Name="Help"></textarea> </td>
</tr>
<td></td>
<td><button class="SUBMIT">SUBMIT</button></td>
</tr>
</table></center></form>
</div>
</div>

<div class="contactcontent">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13712.779494139511!2d76.5671203876699!3d30.769109607429154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ffb140bd63e07%3A0x68591e334d17a988!2sChandigarh%20University!5e0!3m2!1sen!2sin!4v1624779525888!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<?php
if($insert==true){
echo"Thanks for Contacting us";
}
?>


<!--footer-->
<br><br>
<div class="footer">
<div class="footera">
<b>ADDRESS</b>
<br><br>
Address:<br>
abc,NEW DELHI, INDIA<br>
Email:-abc@gmail.com<br>
Mobile:-1234567890<br>
Time: 9:00 AM To 11:00 PM<br>
</div>

<div class="footera">
<b>LOCATION</b><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13712.779494139511!2d76.5671203876699!3d30.769109607429154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ffb140bd63e07%3A0x68591e334d17a988!2sChandigarh%20University!5e0!3m2!1sen!2sin!4v1624779525888!5m2!1sen!2sin" width="100%" height="80" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<!--footer end-->

</table>
<table border ="0" width = "100%" bgcolor ="purple" height="10%">
<tr>
<td align ="center"><font color ="white">DESIGNED BY-ROYAL WORKERS</font>
</td>
</tr>
</table>

</body>
</html>