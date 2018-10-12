<?php 
session_start();
if(isset($_SESSION["username"]))
{
  $userid = $_SESSION["userid"];
}

$conn=mysqli_connect('localhost','root','','sample');
$query=mysqli_query($conn,"SELECT * FROM donor_requests WHERE u_id='$userid'");
	$row=mysqli_fetch_assoc($query);
$id=$row['served_by'];
$query1=mysqli_query($conn,"SELECT * FROM users where userid='$id' ");
$result=mysqli_fetch_assoc($query1);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<label><?php if($row['done']==1){

	echo "Serverd by:".$result['username'];?>
	<br/>
	<?php 
	echo "PHONE NUMBER : ".$result['contact_no'];?>
	<br/>
<?php
	}
	else
	{
	echo "YOUR REQUEST WILL BE ACCEPTED SHORTLY";
	}
	?>
	</label>
</body>
</html>