<?php
	include 'db.php';
	$id = $_GET['id'];
	$s1=$_POST['s1'];
	$s2=$_POST['s2'];
	$s3=$_POST['s3'];
	$s4=$_POST['s4'];
	$s5=$_POST['s5'];
	$image1=$_POST['image1'];
	$title1=$_POST['title1'];
	$para1=$_POST['para1'];
	$image2=$_POST['image2'];
	$title2=$_POST['title2'];
	$para2=$_POST['para2'];
	
$sql = "UPDATE template SET s1='$s1',s2='$s2',s3='$s3',s4='$s4',s5='$s5',image1='$image1',title1='$title1',para1='para1',image2='$image2',title2='$title2',para2='para2' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.open('business.php','_self');</script> ";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
