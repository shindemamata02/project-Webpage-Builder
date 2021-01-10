<?php
	include 'db.php';
	$id = $_GET['id'];
    $sql = "DELETE FROM template where id=$id";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('Location: delete_template_view.php');
      } else {
        echo "Error deleting record: " . $conn->error;
      }
      
      $conn->close();
?>