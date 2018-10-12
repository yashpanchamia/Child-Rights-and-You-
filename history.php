<?php
session_start();
if(isset($_SESSION["username"]))
{
  $userid = $_SESSION["userid"];
}
?>

<?php
        $conn = mysqli_connect("localhost","root","","sample");
        if(isset($_SESSION['userid']))
        {
        $query=mysqli_query($conn,"SELECT * FROM donated WHERE userid='$userid' ORDER BY created_on ASC");
  $count=mysqli_num_rows($query);
  if($count>0)
  {
    while ( $row=mysqli_fetch_assoc($query)) 
      { 
        $pingredients=$row['pingredients'];
        $singredients=$row['singredients'];
        $quantity=$row['quantity'];
        $donated_on=$row['created_on'];
        $product_list="$pingredients&nbsp<strong>$singredients</strong>&nbsp
        $quantity&nbsp$donated_on<br>";
        echo $product_list;
      
      }
  }
  else{
    echo "No products";
  }

      }  
      else{
      }


      ?>
       