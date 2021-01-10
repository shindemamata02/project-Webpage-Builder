<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/busstemp.css">

	</head>
<body> 
	<div class="main_container">
		<div class="header">
			<div class="inner_header">
				<div class="logo_header">
					<h2 class="h2_style">WDesign</h2>
				</div><!--end of logo_header--> 
			</div><!--end of the inner_header-->
		</div><!--end of the header-->
		<h1 class="h1_text"> Business Templates</h1>
			<div class="section4">
				<div class="container1_sec4">
					<?php 
							include 'db.php';
							$sql = "SELECT * FROM template where template=1";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        $id = $row["id"];
									$image = "mamata/".$row['image1'];
									$title1 = $row['title1'];
						?>
					<div class="box">
						<div class="imgbox">
							<img src="<?php echo $image ?>" >
						</div>
						<div class="content">
							<a href="edittemp.php?id=<?php echo $id ?>"><?php echo $title1 ?></a><br>
						</div>
					</div>
					<?php 
							}
								} else {
								    echo "0 results";
								}
								$conn->close();
						?>		
				</div><!--end of the container1_sec4-->
			</div><!--end of the sec4-->
	</div><!--end of the main_container-->
</body> 
</html>