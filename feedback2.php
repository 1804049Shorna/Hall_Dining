<?php
    include 'connect_signup.php';

    if(isset($_POST['submit2']))
    {
        $id = $_POST['id'];
        $feedback = $_POST['feedback']; 

        $sql = "insert into `feedback_post` (id, feedback) values('$id', '$feedback')"; 

        $result = mysqli_query($con, $sql);

        if($result)
        {
            echo "Feedback inserted successfully!";
        }
        else 
        {
            die(mysqli_error($con));
        }
    }
?>   


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/sign_up.css"> -->
    <link rel="stylesheet" href="css/style.css">
	<title>Menu Page</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body>

<header>
		<!-- <a href="#" class="logo"><img ></a> -->
		<!-- <div class="bx bx-menu" id="menu-icon"></div> -->

		<ul class="navbar">
			<li><a href="updated_index.html" class="active">Home</a></li>
			<li><a href="Token.php" class="active">Token</a></li>
			<li><a href="menu_upload.php" class="active">Upload Menu</a></li>
            <li><a href="menu_view.php" class="active">Today's Menu</a></li>
			<li><a href="feedback2.php" class="active">Feedback</a></li>
			<!-- <li><a href="#blog">Blog</a></li>
			<li><a href="#contact">Contact</a></li> -->
			<!-- <li><a href="#" class="cart"><i class='bx bxs-cart-download'></i></a></li> -->
		</ul>

		<!-- <div class="top-btn">
			<a href="Sign_Up.html">Sign Up</a>
		</div> -->
	</header>

	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>

    <div class="containerr p-5 " style="align-items: center; margin-top: 100px; width: 500px; height: 600px;">
        <form style="border:1px solid #ccc" method="post"> 
            <div class="containerr " style="align-items: center;">
                <h1>Feedback Update</h1>
                
                <hr>

                <div class=" mb-4">
                    <label for="id"><b>ID</b></label>
                    <input type="number" placeholder="Enter your ID" name="id" required>
                    <br>
                </div>

                <div class=" mb-4">
                    <label for="feedback"><b>Feedback</b></label>
                    <input  style="height: 100px; width: 300px;" type="text" placeholder="write here" name="feedback" required>
                    <br>
                </div>

                
                <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

                <div class="clearfix">
                    <button type="button" class="cancelbtn btn btn-danger">Cancel</button>
                    <button type="submit" class="signupbtn btn btn-success" name="submit2">Submit</button>
                </div>
            </div>
        </form>

    </div>

</body>
</html>