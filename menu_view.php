<?php include "connect_signup.php"; ?> 
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body style ="background-color: white ">
     <a href="index.php">&#8592;</a>
     <?php 
          $sql = "SELECT menu FROM images2 ORDER BY SerialNo DESC";
          $res = mysqli_query($con,  $sql); 

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb" style="height: 100px; width=80px ; border: 1px solid black; background-color : white; margin:5px ">
			 	<?php echo $images['menu'] ?>
             </div>
          		
    <?php } }?>
</body>
</html>