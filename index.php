<html>
<head>
<?php
session_start();
if(isset($_SESSION['user']))
Header("location:quiz.php");
?>
<title>Welcome  !</title>
<script type="text/javascript" src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="main.css">
<script type="text/javascript">
$(document).ready(function() {
    $(".content").fadeOut('slow',function() {
		$("#home_content").fadeIn('fast');
	});
	$(".menu").click(function() {
    $(".content").fadeOut('fast');
	var id = this.id;
	$("#"+id+"_content").fadeIn('slow');

});
});
</script>
</head>
<body>
<div id="wrapper">
<div id="hed">
<div id="icons">
<span id="searchbar">
Search:<input type="text" placeholder="Site Search"/>
</span>
<a href="www.twiter.com"><img src="images/twitter.jpg" style="width:30px;height:28px;"/></a>
<a href="http://www.facebook.com/GEU"><img src="images/facebook.jpg" style="width:30px;height:28px;"/></a>
<a href="http://www.orkut.com/GEU"><img src="images/orkut.jpg" style="width:30px;height:28px;"/></a>
<a href="http://www.linked.com/GEU"><img src="images/linkedin.jpg" style="width:30px;height:28px;"/></a>
<a href="http://www.geusoiety.in/GEU"><img src="images/geusociety.jpg" style="width:30px;height:28px;"/></a>
</div>
<div id="mainmenu">
<input type="button" value="Home" id="home" class="menu" >
<input type="button" value="Quiz" id="quiz" class="menu" >
<input type="button" value="Get In" id="login" class="menu">
<input type="button" value="About US" id="aboutus" class="menu">
<input type="button" value="Contact US" id="contactus" class="menu">
<input type="button" value="Help" id="help" class="menu">
</div>
<div id="logo"><img src="images/logo.png" height="78px"></div>
</div>
<div class="content" id="home_content">
<span id="messge" style="margin-left:300px;color:red;">
<?php
if(isset($_GET['msg']))
{
echo "".$_GET['msg'];
unset($_GET['msg']);
}
?>
</span>
<h2 class="cheading">Welcome</h2>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
</div>
<div class="content" id="login_content"> 
<span id="loged" style="width:363px;float:left;height:360px;border-right:1px solid rgb(255, 92, 0);text-align:right;padding:20px;">
<h2 class="cheading">LogIn</h2>
<form action="dologin.php" method="POST">
Email:<input type="text" class="ifield1" name="email" placeholder="Enterd Your Email" /></br></br>
Password:<input type="password" name="pass" class="ifield1" placeholder="Enterd Your Pssword" /></br></br></br>
<input type="submit" value="Login" class="joiningg"/><input type="Reset" value="Reset"  class="joiningg"/>
</form>
</span>
<span id="registed" style="width:363px;float:right;height:360px;border-left:1px solid rgb(255, 92, 0);text-align:right;padding:20px;">
<h2 class="cheading">Register</h2>
<form action="doregister.php" method="POST">
Name:<input type="text" class="ifield" name="name" placeholder="Enterd Your Name"></br></br>
Email:<input type="text" name="email" class="ifield" placeholder="Enterd Your Email"></br></br>
Password:<input type="password" class="ifield" name="pass" placeholder="Enterd Your Pssword"></br></br>
Phone:<input type="text" name="phone" class="ifield" placeholder="Enterd Your Mobile Number"></br></br></br>
<input type="submit" value="Register"  class="joiningg"/><input type="Reset" value="Reset"  class="joiningg"/>
</form>
</span>
</div>
<div class="content" id="quiz_content">
<h2 class="cheading">Quiz Corner</h2>
<p>Hey there, to take the quiz seasson please login first. To login please click the "Get In" button. If you are a new member you can register from there itself.</p>
<h3>The Procedure Is</h3>
<a href="images/help1.jpg"><img src="images/help1.jpg" width="350px" height="270px"></a>&nbsp;<a href="images/help2..jpg"><img src="images/help2..jpg" width="350px" style="float:right"height="270px"></a>
</div>
<div class="content" id="help_content">
<h2 class="cheading">Help</h2>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
</div>
<div class="content" id="aboutus_content">
<h2 class="cheading">About Us</h2>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
</div>
<div class="content" id="contactus_content">
<h2 class="cheading">Contact Us</h2>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
<p>
Action Center lists important messages about security and maintenance settings that need your attention. Red items in Action Center are labeled Important, and indicate significant issues that should be addressed soon, such as an outdated antivirus program that needs updating. Yellow items are suggested tasks that you should consider addressing, like recommended maintenance tasks.

Click to open Action Center.

To view details about either the Security or Maintenance section, click the heading or the arrow next to the heading to expand or collapse the section. If you don’t want to see certain types of messages, you can choose to hide them from view
</P>
</div>
<div id="footer">
<hr/>

<footer>
Copyright Protected © 2013   Pratik Kumar | Graphic Era University | All Rights Reserved
</footer>
</div>
</div>
</body>
</html>