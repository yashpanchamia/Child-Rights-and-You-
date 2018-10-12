<html>
<head>



	<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.css">
  <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap-theme.min.css">
  <script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
  <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.6-dist/js/npm.js"></script>
  
</head>
<body>

<div class="container-fluid" style="top:20%;">
      
      <div >
<div class="row" style="margin-top:50px">
    <div style="float:left!important;width:300px;height:300px" class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" style="float:left" action="login.php">
<!--             <input type="hidden" name="csrfmiddlewaretoken" value="SxViUf1RZ9KkB3xWHQmMQKRp3oYOW7y7">
 -->			
                <fieldset>
				<div class="row">
							<a class="logo-color"><div class="col-xs-12 col-sm-12 col-md-12 inline logo-text"><h1><?php
    $userid=$_GET["u"];
    $rid = $_GET["r"];
    $conn =  mysqli_connect("localhost","root","","sample");
    if(mysqli_query($conn,"UPDATE donor_requests SET done='1' WHERE r_id='$rid'")){
        echo "Your Service Confirmed";
    }

?></h1></div></a>
				</div>

				<hr class="colorgraph">

                

				<div class="form-group">
                     <?php 

                    $dataset = mysqli_query($conn,"SELECT username,contact_no FROM users where userid='$userid'");
                    while($row= mysqli_fetch_assoc($dataset))
                    {
                        echo "DONOR NAME : ".$row["username"];?><br/><?php
                        echo "PICK-UP ADDRESS : ".$_GET["a"];?> <br/><?php
                        echo "CONTACT NUMBER : ".$row["contact_no"];
                    }

                    ?></label>
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
                        <a href="donoreqview.php"><input type="submit" name="login" class="btn btn-lg btn-success btn-block" value="Back To Requests"></a>
					</div>

				</div>
		
        	</fieldset>
		</div>
        </form>

	</div>

    
  </div>

</div>

</div>

</body>

</html>
