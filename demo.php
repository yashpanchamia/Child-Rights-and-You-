<?php

include('conn.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  
	<style>
table { 
padding: 80px;
color: #333; /* Lighten up font color */
font-family: Helvetica, Arial, sans-serif; /* Nicer font */
width: 100%; 
border-collapse: 
collapse; border-spacing: 0; 
text-align: center;
}

td, th { border: 1px solid #CCC; height: 30px;text-align: center; } /* Make cells a bit taller */

th {
	text-align: center!important;
background: #F3F3F3; /* Light grey background */
font-weight: bold; /* Make sure they're bold */
}

td {
background: #FAFAFA; /* Lighter grey background */
text-align: center; /* Center our text */
}





ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

</style>
</head>
<body>
<?php 
include('menu.php');

?>
<div style="padding:50px" class="contain" id="home" name="home">


<h3><p>ALL REQUESTS</p></h3>
<a href="home_add_page.php"> Add a new recipe</a>
<table >
  
  <tr>
   




<th width="15%">DONOR NAME</th>

<th width="15%">CONTACT NO.</th>

<th width="15%">ADDRESS</th>

<th width="15%">FOOD/INGREDIENTS</th>

<th width="15%">REQUEST STATUS</th>

</tr>

<?php 

include('conn.php');
//session_start();
$sql="select * from donor_requests";
$res = mysql_query($sql);

$sql1="select * from donor_requests";
$res1= mysql_query($sql1);
while($rows=mysql_fetch_array($res))
{
  $uid = $rows['u_id'];
  $name = "SELECT * from users where userid ='$uid'";
  $result=mysql_query($name);
  $nam=mysql_fetch_array($result);
  ?><tr> <td> <?php echo $nam["username"];?> </td> 
  <td> <?php echo $nam["contact_no"];?> </td>
  <td> <?php echo $nam["address"];?> </td>
  <td> <?php echo $rows['pingredients']?></td>
  <td> <?php if($rows['done']==1){
   ?> <img src="images/1.jpg"><?php 
  }
  else{
    echo "PENDING REQUEST";
  }?>
  </tr><?php
}


  ?>

</table>
</div>
</body>
</html>