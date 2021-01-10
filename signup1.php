




<?php
	if (isset($_POST['edit'])){

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "softzeal";

	$m1=$_POST['name'];
	$m2=$_POST['email'];
	$m3=$_POST['contact'];
	
	
	
	$conn = mysqli_connect($servername, $username, $password,$dbname);
	$sql = "INSERT INTO builder(name,email,contact) VALUES('$m1','$m2' ,'$m3')";


	$bhuvi = mysqli_query($conn, $sql);

	if($bhuvi) 
	{
  	echo ".";?>
  	<div class="page1">
  	<BR><BR> <a href="index.php" class="font_style">CONTINUE WITH US........</a>
  	</div>
  	 <?php
  	}
 
	else 
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
}

?>
<style>
	.page1{
		text-align:center;
		font-size:35px;
		background-color:black;
		color:white;
		height:100%;
	}
	.font_style{
		margin-top:50%;
	}
</style>