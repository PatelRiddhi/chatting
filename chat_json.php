<?php
include('db.php');
if($_GET['q'])
{
	$user=$_GET['q'];
	$sql = mysqli_query($bd, "select * from chat order by id desc limit 1");
	$row=mysql_fetch_array($sql);
	$userx=$row['user'];
	$id=$row['id'];
	$msg=$row['msg'];
	if($userx!=$user)
	{
		echo '{"posts": [';
		echo '
		    {
			"id":"'.$id.'",
			"user":"'.$userx.'",
			"msg":"'.$msg.'"
			},';	
		echo ']}';
	}
} 
?>