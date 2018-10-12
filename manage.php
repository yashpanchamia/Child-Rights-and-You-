<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="manage.php">
	<input type="text" name="ing_name">
		<input type="text" name="quantity">
		 <select name="units">
  <option value="kg">kg</option>
  <option value="litres">litres</option>
  <option value="pieces">pieces</option>
</select>
		<input type="submit" value="submit" name="submit">
</form>
</body>
</html>

<?php
$conn = mysqli_connect("localhost","root","","sample");
if(isset($_POST['submit']))
{
$ing_name = $_POST['ing_name'];
$quantity = $_POST['quantity'];
$units = $_POST['units'];
echo $units;
if(!$conn)
	echo "error";
  else
  //echo 'connection established';
$query = mysqli_query($conn,"INSERT INTO ing
  (name,quantity,units) 
  VALUES('$ing_name','$quantity','$units')");
  if($query === false)
            {
            	echo "error";
            }
            else
            {
            	echo "1";
            }
}
?>