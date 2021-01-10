<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "softzeal";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM header";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    	<tr>
    		<th>hdata1</th>
    		<th>hdata2</th>
    		<th>hdata3</th> 
    		<th>hdata4</th>
    		
    		
    	</tr>";
   
    while($row = $result->fetch_assoc()) {
        ?>
        <tr>
        	<td><?php echo $row['hdata1'] ?></td>
        	<td><?php echo $row['hdata2'] ?></td>
        	<td><?php echo $row['hdata3'] ?></td>
        	<td><?php echo $row['hdata4'] ?></td>
        	
        	
        </tr>
        <?php
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();



?>
</body> 
</html>