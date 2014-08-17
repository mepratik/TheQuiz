<html>
<?php
session_start();
if(!isset($_SESSION['user']))
Header("location:index.php");
?>
<head>
<title>Welcome  !</title>
<script type="text/javascript" src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="main.css">
<script type="text/javascript">
$(document).ready(function() {
    $(".content").fadeOut('slow',function() {
		$("#quiz_content").fadeIn('fast');
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
<?php
echo "Welcome ". $_SESSION['user'] ." <a href=\"destroy.php\">LogOut</a>";
?>
</span>
<a href="www.twiter.com"><img src="images/twitter.jpg" style="width:30px;height:28px;"/></a>
<a href="http://www.facebook.com/GEU"><img src="images/facebook.jpg" style="width:30px;height:28px;"/></a>
<a href="http://www.orkut.com/GEU"><img src="images/orkut.jpg" style="width:30px;height:28px;"/></a>
<a href="http://www.linked.com/GEU"><img src="images/linkedin.jpg" style="width:30px;height:28px;"/></a>
<a href="http://www.geusoiety.in/GEU"><img src="images/geusociety.jpg" style="width:30px;height:28px;"/></a>
</div>
<div id="mainmenu">
<input type="button" value="Home" id="home" class="menu" />
<input type="button" value="Quiz" id="quiz" class="menu" />
<input type="button" value="My Profile" id="profile" class="menu"/>
<input type="button" value="About US" id="aboutus" class="menu"/>
<input type="button" value="Contact US" id="contactus" class="menu"/>
<input type="button" value="Help" id="help" class="menu"/>
</div>
<div id="logo"><img src="images/logo.png" height="78px"></div>
</div>
<div class="content" id="home_content">
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
<div class="content" id="quiz_content">
<h2 class="cheading">Quiz Corner</h2>

<span id="marks" style="float:right;">
Total Marks:<?php echo $_SESSION['score'];?>
</span>
<center>
<?php
if(isset($_POST['givequestion']))
{
$area=$_POST['area'];
$qqid=$_SESSION[$area];
if(isset($_SESSION['areachosen']))
{
unset($_SESSION['areachosen']);
}
$_SESSION['areachosen']=$area;
echo $qqid." ".$_SESSION['areachosen'];
mysql_connect("127.0.0.1","root")or die("Cant Connect". mysql_error());
mysql_select_db('quiz')or die("Cant Select Database". mysql_error());
$q="select * from general_questions where q_id='$qqid' and category='$area'";
$p=mysql_query($q)or die("Cant Exicute Query". mysql_error());
$row=mysql_fetch_array($p)or die("Cant Fetch Array". mysql_error());
echo "<form action='update.php' method='POST'><table width='470px'><tr><td width='50%'>Q.".$row['q_id']." ".$row['question']."</td></tr><tr><td>1.<input type='radio' name='opt' value='1'/>".$row['op1']."</td><td>2.<input type='radio' name='opt' value='2'/>".$row['op2']."</td></tr><tr><td>3.<input type='radio' name='opt' value='3'/>".$row['op3']."</td><td width='50%'>4.<input type='radio' name='opt' value='4'/>".$row['op4']."</td></tr><tr><td>Discription:-".$row['description']."</td></tr></table><input type='submit' name='dosubmit' value='Submit' class='qbutton'/><input type='submit' value='Skip' class='qbutton'/><input type='submit' value='Exit' class='qbutton'/></form>";
}
else
{
echo "<form action='quiz.php' method='POST'><table width='470px'><tr><td width='50%'>Selsct Your Area Of Intrest.</td></tr><tr><td>1.<input type='radio' name='area' value='sports'>Sports</td></tr><tr><td>2.<input type='radio' name='area' value='politics'>Politics</td></tr><tr><td>3.<input type='radio' name='area' value='history'>History</td></tr><tr><td>4.<input type='radio' name='area' value='science'>Science</td></tr></table><input type='submit' name='givequestion' value='Submit' class='qbutton'/></form>";
}
?>
</center>
</div>
<div class="content" id="profile_content">
<h2 class="cheading">My Profile</h2>
<span id="profiles" style="position:absolute;margin-left:310px;margin-top:20px;">
<?php
echo "<table><tr><td>Name:</td><td>".$_SESSION['user']."</td></tr><tr><td>Emil:</td><td>".$_SESSION['email']."</td></tr><tr><td>Phone:</td><td>".$_SESSION['phone']."</td></tr><tr><td>Score:</td><td>".$_SESSION['score']."</td></tr></table>";
?>
</span>
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