<?php
	include 'db.php';

	$template=$_POST['template'];
	$s1=$_POST['s1'];
	$s2=$_POST['s2'];
	$s3=$_POST['s3'];
	$s4=$_POST['s4'];
	$s5=$_POST['s5'];

	$image1=$_FILES["image1"]["name"];
    $temp_name=$_FILES["image1"]["tmp_name"];
    move_uploaded_file($temp_name,"new/$image");

	$title1=$_POST['title1'];
	$para1=$_POST['para1'];

	$image2=$_FILES["image2"]["name"];
    $temp_name2=$_FILES["image2"]["tmp_name"];
    move_uploaded_file($temp_name2,"new/$image2");

	$title2=$_POST['title2'];
	$para2=$_POST['para2'];
	
$sql = "INSERT INTO template (template, s1, s2, s3, s4, s5,image1,title1, para1,image2, title2, para2)
VALUES ('$template', '$s1','$s2','$s3','$s4','$s5','$image1', '$title1','$para1','$image2','$title2','$para2') ";

//$sql = "INSERT INTO `template` (`template`,`s1`,`s2`,`image2`) VALUES ('$template','$s1','$s2','$image2')";

error_reporting(0);
//echo $sql; die;

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>