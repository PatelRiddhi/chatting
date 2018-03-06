<?php
include('db.php');
if($_POST)
{
	$user=$_POST['user'];
	$msg=$_POST['msg'];
	$sql= "insert into chat(users,msg)values('".$user."','".$msg."')";
	$q = mysqli_query($bd,$sql);
}
?>

<li class="box">
<b><?php echo $user; ?>:</b><?php echo $msg;?>
</li>