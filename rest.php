<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/template.css">
		
	</head>
<body> 
	<div class="main_container">
				<div class="section4">
					<div class="left_sec4">
						<h2 class="h2_style">WDesign</h2>
						<ul class="ul_style">
							<li class="li_style"><a class="a_style" href="business.php">Business</a></li> 
							<li class="li_style"><a class="a_style" href="fashiondesign.php">Fashion & Design</a></li> 
							<li class="li_style"><a class="a_style" href="rest.php">Restaurant</a></li> 
							<li class="li_style"><a class="a_style" href="food.php">Food</a></li> 
							<li class="li_style"><a class="a_style" href="add_template.php">Add Template</a></li> 
							
						</ul>
					</div>
					<div class="right_sec4">
					<div class="container">
						<h1 class="h1_temp">Template</h1>
						<?php 
							include 'db.php';
							$sql = "SELECT * FROM template where template=3";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        $id = $row["id"];
									$image = $row["image1"];
									$title1 = $row['title1'];
						?>
						<div class="box">
							<div class="imgbox">
								<img src="<?php echo $image ?>" >
							</div>
							<div class="content">
								<a href="business.php?<?php echo $id ?>"><?php echo $title1 ?></a>
							</div>
						 </div>	
						 <?php 
							}
								} else {
								    echo "0 results";
								}
								$conn->close();
						?>				
					</div><!--end of the container-->
				</div><!--end of the right_sec4-->
		</div><!--end of the sec4-->
		<div class="sec5">
		<a href="project215.php" class="butt1">BACK</a> 
	</div>
</body>
</html>