<html>
<head>
<title>Quiz</title>
</head>
<body>
<form action="index.php" method="POST">
<table width="470px">
<?php
mysql_connect("127.0.0.1","root")or die("Cant Connect". mysql_error());
mysql_select_db('quiz')or die("Cant Select Database". mysql_error());
$q="select * from general_questions where q_id=2";
$p=mysql_query($q)or die("Cant Exicute Query". mysql_error());
$row=mysql_fetch_array($p)or die("Cant Fetch Array". mysql_error());?>
<tr><td width="50%">Q.<?php echo $row['q_id']." ".$row['question'];?></td></tr>
<tr><td>1.<input type="radio" name="option" vlaue="1"/><?php echo $row['op1']?></td>
<td>2.<input type="radio" name="option" vlaue="2"/><?php echo $row['op2'];?></td></tr>
<tr><td>3.<input type="radio" name="option" vlaue="3"/><?php echo $row['op3'];?></td>
<td width="50%">4.<input type="radio" name="option" vlaue="4"/><?php echo $row['op4'];?></td></tr>
<tr><td>Discription:-<?php echo $row['description'];?></td></tr>
</table>
<input type="submit" value="Submit"/><input type="submit" value="Skip"/><input type="submit" value="Exit"/>
</form>
</body>
</html>