<html>
<head>
		<link rel="stylesheet" type="text/css" href="css/edittemp.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script>
			function openNav() {
			  document.getElementById("mySidenav").style.width = "250px";
			  document.getElementById("main").style.marginLeft = "250px";
			  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}

			function closeNav() {
			  document.getElementById("mySidenav").style.width = "0";
			  document.getElementById("main").style.marginLeft= "0";
			  document.body.style.backgroundColor = "white";
			}
</script>
</head> 
<body>
	<?php 
							include 'db.php';
							$id = $_GET['id'];
							$sql = "SELECT * FROM template where id=$id";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row = $result->fetch_assoc()) {
							        $id = $row["id"];
							        $s1 = $row['s1'];
							        $s2 = $row['s2'];
							        $s3 = $row['s3'];
							        $s4 = $row['s4'];
							        $s5 = $row['s5'];
									$image1 = "mamata/".$row['image1'];
									$title1 = $row['title1'];
									$para1 = $row['para1'];
									$image2 = "mamata/".$row['image2'];
									$title2 = $row['title2'];
									$para2 = $row['para2'];
			?>
	<div class="main_container">
		<div id="mySidenav" class="sidenav">
         		 <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				  <a href="edit_template_data.php?id=<?php echo $id ?>">Edit Data</a>
				  <a href="#"></a>
				  <a href="#"></a>
		</div>

		<div id="main">
  				<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  	
  				<div class="part1">
				<div class="menu_bar">	
					<img src="mamata/cake.png" class="cake_logo">
					<ul class="ul_style">
						<li class="li_style"><a class="a_style"><?php echo $s1 ?></a></li>
						<li class="li_style"><a class="a_style"><?php echo $s2 ?></a></li>
						<li class="li_style"><a class="a_style"><?php echo $s3 ?></a></li>
						<li class="li_style"><a class="a_style"><?php echo $s4 ?></a></li>
						<li class="li_style"><a class="a_style"><?php echo $s5 ?></a></li>
					</ul>

				</div>

			</div><!--end of the part1-->
			<div class="part2">
				<div class="section1">
					<img src="<?php echo $image1 ?>" class="sec1_img">
				</div><!--end of the sec1-->
				<div class="section2">
					<h1 class="h1_sec2"><?php echo $title1  ?></h1>
					<p class="p_sec2"><?php echo $para1  ?></p>

				</div><!--end of the section2-->
				<div class="section3">
					<div class="left_40_sec3">
						<img src="<?php echo $image2 ?>" class="img_sec3">
					</div> 
					<div class="right_60_sec3">
							<p class="p2_sec3"><?php echo $para2 ?></p>
							<!--<p class="p2_sec3">Ut commodo malesuada eros, quis consequat ante tincidunt ut. Suspendisse malesuada augue vitae nisi sollicitudin placerat.</p>-->
							<button class="butt_sec3">Read More</button>
					</div>
				</div><!--end of the section3-->
				<div class="section4">
					<h1 class="h1_sec4">Gallary One</h1>
					<div class="sec4_20">
						<img src="images/neaty-03.jpg " class="sec4_img1">

					</div>
					<div class="sec4_20">
						<img src="images/neaty-04.jpg " class="sec4_img2">
					</div>
					<div class="sec4_20">
						<img src="images/neaty-05.jpg " class="sec4_img3">
					</div>
					<div class="sec4_20">
						<img src="images/neaty-06.jpg " class="sec4_img4">
					</div>
					<div class="sec4_20">
						<img src="images/neaty-07.jpg " class="sec4_img5">
					</div>
				</div><!--end of the section4-->	
				<div class="section5">
					<h1 class="h1_sec5">Gallary Two</h1>
					<div class="sec5_33">
						<img src="images/neaty-08.jpg " class="sec5_img1">
					</div> 
					<div class="sec5_33">
						<img src="images/neaty-09.jpg " class="sec5_img2">
					</div> 
					<div class="sec5_33">
						<img src="images/neaty-10.jpg " class="sec5_img3">
					</div> 
				</div><!--end of the section5-->
				<div class="section6">
					<h1 class="h1_sec6">Gallary Three</h1>
					<div class="sec6_25">
						<img src="images/neaty-11.jpg " class="sec6_img1">
					</div>
					<div class="sec6_25">
						<img src="images/neaty-12.jpg " class="sec6_img2">
					</div>
					<div class="sec6_25">
						<img src="images/neaty-13.jpg " class="sec6_img3">
					</div>
					<div class="sec6_25">
						<img src="images/neaty-14.jpg " class="sec6_img4">
					</div> 
				</div><!---end of the section6-->
				<div class="section7">
					<h1 class="h1_sec7">Contact Us</h1>
					<div class="sec7_50">
						<form>
							<input type="text" value="" class="input_type" placeholder="NAME"><br><br>
							<input type="text" value="" class="input_type" placeholder="EMAIL"><br><br>
							<input type="text" value="" class="input_type2" placeholder="MESSAGE"><br><br>
							<button class="but_sec7">Send</button>
						</form>
					</div>
					<div class="sec7_50">
						<p class="p_sec7">Nullam vivera fermentum purus id blandit. Phasellus lacus mi, porta vel sodales nec, faucibus non eros. Nulla at quam vel risus laoreet tincidunt in in sem.</p>

						<p class="p2_sec7">11/22 Etiam mauris erat,
								Vestibulum eu augue nec, 10220
								Nam consequat</p>



					</div>
				</div><!--end of the section7--> 
			</div><!--end of the part2-->




		

   

  		</div><!--end of main-->
	</div><!--end of the main_container-->
<?php 
							}
								} else {
								    echo "0 results";
								}
								$conn->close();
						?>		
					</body>
</html>