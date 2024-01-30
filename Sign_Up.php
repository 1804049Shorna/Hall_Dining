<?php
    include 'connect_signup.php';

    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $id = $_POST['id'];
        $name = $_POST['name'];
        $password = $_POST['password'];

        $sql = "insert into `signup` (email, id, name, password) values('$email', '$id', '$name', '$password')"; 

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/sign_up.css"> -->
    <title>Document</title>
</head>

<body>
<form action="animation.html">
    <div class="container p-5 " style="align-items: center; margin-top: 100px; width: 500px; height: 500px;">
        <form method="post">  
            <div class="container " style="align-items: center;">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account.</p>
                <hr>

                <div class=" mb-4">
                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" required>
                    <br>
                </div>

                <div class=" mb-4">
                    <label for="id"><b>ID</b></label>
                    <input type="text" placeholder="Enter Your ID" name="id" required>
                    <br>
                </div>

                <div class=" mb-4">
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Enter Name" name="name" required>
                    <br>
                </div>

                <div class=" mb-4">
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required><br>

                </div>

                <!-- <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p> -->

                <div class="clearfix">
                    <button type="button" class="cancelbtn btn btn-danger">Cancel</button>
                    <button type="submit" class="signupbtn btn btn-success" name="submit">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
</form>
</body>

</html>