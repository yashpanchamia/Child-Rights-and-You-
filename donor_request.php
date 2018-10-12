<html>
	<head><title>donor request</title></head>
	<body>
		<form action="donor_request.php" method="get">
			<input type="text" name="address">
			<input type="submit" name="submit" value="submit">
		</form>
	</body>
</html>
<?php
if(isset($_GET["address"])){
	session_start();
	$id=$_SESSION["userid"];
	$address=$_GET["address"];
	echo $address;
	$_SESSION["address"] = $address;
	$conn = new mysqli("localhost","root","","sample");
	if($conn->query("INSERT INTO donor_requests(u_id,address,done) values('".$id."','".$address."','0')")===true){
		echo "success";
	}
	else{
		echo "error";
	}
}
?>