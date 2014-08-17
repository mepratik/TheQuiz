<?php
session_start();
mysql_connect("127.0.0.1","root")or die("Cant Connect". mysql_error());
mysql_select_db("quiz");
$uid=$_SESSION['uid'];
$area=$_SESSION['areachosen'];
echo $_SESSION['areachosen'];
$qid=$_SESSION[$area];
$qq="UPDATE curent_status set $area='$qid+1' where u_id='$uid'";
mysql_query($qq)or die("Cant Increment qid". mysql_error());
$_SESSION[$area]=$qid+1;
if(isset($_POST['dosubmit']))
{
$ans=$_POST['opt'];
$q="select * from general_questions where q_id='$qid' AND category='$area'";
$p=mysql_query($q)or die("Cant Take Data". mysql_error());
$r=mysql_fetch_array($p)or die("Cant Fetch Array". mysql_error());
$correct=$r['cop'];
if($ans==$correct)
{
$score=$_SESSION['score'];
$qqq="UPDATE curent_status set score='$score+1' where u_id='$uid'";
mysql_query($qqq)or die("Cant Increment Score". mysql_error());
$_SESSION['score']=$score+1;
}
}
Header("Location:quiz.php");
?>