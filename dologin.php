<?php
$email=$_POST['email'];
$password=$_POST['pass'];
mysql_connect("127.0.0.1","root")or die("Cant Connect". mysql_error());
mysql_select_db("quiz");
$q="select * from users where email='$email' AND password='$password'";
$ro=mysql_query($q)or die("Cant Exicute Query". mysql_error());
$pow=mysql_num_rows($ro);
if($pow!=1)
{
Header("Location:index.php?msg=Wrong+Username+or+Password");
}
session_start();
$q2="select * from users where email='$email'";
$id=mysql_query($q2)or die("Cant Take Id". mysql_error());
$row=mysql_fetch_array($id)or die("Cant Fetch Array". mysql_error());
$_SESSION['user']=$row['name'];
$_SESSION['email']=$row['email'];
$_SESSION['phone']=$row['phone'];
$_SESSION['uid']=$row['u_id'];
$ud=$row['u_id'];
$q3="select * from curent_status where u_id='$ud'";
$iid=mysql_query($q3)or die("Cant Take Id". mysql_error());
$roow=mysql_fetch_array($iid)or die("Cant Fetch Array". mysql_error());
$_SESSION['score']=$roow['score'];
$_SESSION['history']=$roow['history'];
$_SESSION['politics']=$roow['politics'];
$_SESSION['science']=$roow['science'];
$_SESSION['sports']=$roow['sports'];
Header("Location:quiz.php");

?>