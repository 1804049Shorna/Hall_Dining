<?php
    include 'connect_signup.php';

    if(isset($_POST['submit2']))
    {
        $id = $_POST['id'];
        $menu = $_POST['menu']; 

        $sql = "insert into `menu_table` (id, menu) values('$id', '$menu')"; 

        $result = mysqli_query($con, $sql);

        if($result)
        {
            echo "Data inserted successfully!";
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
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>

    <div class="container p-5 " style="align-items: center; margin-top: 100px; width: 500px; height: 600px;">
        <form style="border:1px solid #ccc" method="post"> 
            <div class="container " style="align-items: center;">
                <h1>Meal Update</h1>
                <p>Give your feedback</p>
                <hr>

                <div class=" mb-4">
                    <label for="id"><b>ID</b></label>
                    <input type="number" placeholder="Enter your ID" name="id" required>
                    <br>
                </div>

                <div class=" mb-4">
                    <label for="menu"><b>Menu</b></label>
                    <input  style="height: 100px; width: 300px;" type="text" placeholder="write here" name="menu" required>
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