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
				<div class="butt_right">
					<a class="back" href="template.php">BACK</a>
				</div>
			</div><!--end of the inner_header-->
		</div><!--end of the header-->
		<h1 class="h1_text"> Business Templates</h1>
			<div class="section4">
				<div class="container1_sec4">


<div class="section4">
			<div class="container1_sec4">
				<div class="box">
					<div class="imgbox">
						<img src="images/pic1.jpg" >
					</div>
					<div class="content">
						<a href="./project64.html">VIEW</a><br>
						

					</div>
				 </div>
				<div class="box"> 
					<div class="imgbox">
						<img src="images/pic1.jpg" >
					</div>
					<div class="content">
						<h1>Link</h1>
					</div>
				</div>
				<div class="box">
					<div class="imgbox">
						<img src="images/pic1.jpg" >
					</div>
					<div class="content">
						<h1>Link</h1>
					</div>
				 </div>
				<div class="box"> 
					<div class="imgbox">
						<img src="images/pic1.jpg" >
					</div>
					<div class="content">
						<h1>Link</h1>
					</div>
				</div>
				<div class="box">
					<div class="imgbox">
						<img src="images/pic1.jpg" >
					</div>
					<div class="content">
						<h1>Link</h1>
					</div>
				 </div>
				<div class="box">
					<div class="imgbox">
						<img src="images/pic1.jpg" >
					</div>
					<div class="content">
						<h1>Link</h1>
					</div>
				 </div>
				
			</div><!--end of the container1_sec4-->
		</div><!--end of the sec4-->




					
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
						<a href="edittemp.php?id=<?php echo $id ?>"><img src="<?php echo $image ?>" ></a>
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