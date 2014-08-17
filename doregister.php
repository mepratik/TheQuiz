<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$phone=$_POST['phone'];
mysql_connect("127.0.0.1","root")or die("Cant Connect". mysql_error());
mysql_select_db("quiz");
$q="insert into users(name,email,password,phone) values ('$name','$email','$password','$phone')";
mysql_query($q)or die("Cant Insert". mysql_error());
session_start();
$q2="select * from users where email='$email'";
$id=mysql_query($q2)or die("Cant Take Id". mysql_error());
$row=mysql_fetch_array($id)or die("Cant Fetch Array". mysql_error());
$_SESSION['user']=$name;
$_SESSION['email']=$emil;
$_SESSION['phone']=$phone;
$_SESSION['uid']=$row['u_id'];
$_SESSION['history']=1;
$_SESSION['politics']=1;
$_SESSION['science']=1;
$_SESSION['sports']=1;
$_SESSION['score']=0;
$rr=$row['u_id'];
$q3="insert into curent_status(u_id,history,politics,science,sports,score) values ($rr,1,1,1,1,0)";
mysql_query($q3)or die("Cant Insert into current status". mysql_error());
Header("Location:quiz.php");
?>