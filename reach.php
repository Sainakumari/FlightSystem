<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("fly7.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.text-block {
  position: absolute;
  left: 350px;
  top: 200px;
  height: 50%;
  width: 30%;
  background-color: white;
  color: black;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
</head>
<body>
	<?php
	include 'conn.php';

	$trip = $_POST['trip'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$from = $_POST['flyingfrom'];
	$to = $_POST['flyingto'];
	$con = $_POST['con'];
	$date = $_POST['tdate'];
	$food =$_POST['seat'];
	$meal = "";
	foreach($food as $meal1)
	{
		$meal .= $meal1.", ";
	}
	?>

<div class="bg"><div>
  <div class="text-block">
    <?php
		echo "<h4>YOU ENTERED :</h4>";
		echo "<b>Trip Type :</b> ".$trip."<br>";
		echo "<b>Email : </b>".$email."<br>";
		echo "<b>Name : </b>".$name."<br>";
		echo "<b>Flying From: </b>".$from."<br>";
		echo "<b>Flying To :</b> ".$to."<br>";
		echo "<b>Date : </b>".$date."<br>";
		echo "<b>Contact : </b>".$con."<br>";
		echo "<b>Food Interest : </b>".$meal."<br>";

		if (isset($_POST['submit']))
		{
			$sql = "INSERT INTO flyreg (trip, email, name, tfrom, tto, tdate, con, food) VALUES ('$trip','$email','$name','$from','$to','$date','$con', '$meal')";

			if(mysqli_query($conn, $sql)) 
 			{ 
    			echo "<br>"; 
    			echo "<br>"; 
    			echo 'YOUR DATA IS INSERTED SUCCESSFULLY.'; 
  				echo "<br>"; 

 			} 
 			else 
 			{ 
  				echo "NOT INSERTED". $sql . " " . mysqli_error($conn);
   			} 

		}
		include 'closedb.php';
		
	?>

  </div>
</div>

</body>
</html> 





















