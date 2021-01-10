<?php

if (isset($_POST['add'])){
$servername='localhost';
$username='root';
$password='';
$dbname="softzeal";


$value1=$_POST['name'];
$value2=$_POST['email'];
$value3=$_POST['massage'];


$conn=mysqli_connect($servername,$username,$password,$dbname);
$sql="INSERT INTO contact (name,email,massage) VALUES ('$value1','$value2','$value3')";


$ver=mysqli_query($conn,$sql);

if($ver){

	echo"record is inserted";
	?>
	<a href="index.php">Back</a>
<?php

}
else{
	echo "Error:" .$sql ."<br>" .mysqli_error($conn);
}
	mysqli_close($conn);

}
?>
</body> 
</html>