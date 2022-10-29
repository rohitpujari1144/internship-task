<?php include("connection.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./signup_page.css">
    <title>Sign Up</title>
</head>
<body>

    <div class="container-xxl container">
        <h1>Sign Up</h1>

        <!-- first row div start -->
        <div class="first_row_container">
            <div class="name_div">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label name_style">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1 name" placeholder="Enter name" name="name">
                </div>
            </div>
            <div class="username_div">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label name_style">Username</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1 username" placeholder="Enter username" name="username">
                </div>
            </div>
        </div>
        <!-- first row div end -->

        <!-- second row div start -->
        <div class="first_row_container">
            <div class="password_div">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label name_style">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1 password" placeholder="Enter password" name="password">
                </div>
            </div>
            <div class="confirm_password_div">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label name_style">Confirm password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1 confirmpassword" placeholder="Confirm password" name="confirmpassword">
                </div>
            </div>
        </div>
        <!-- second row div end -->
        
        <div class="button">
            <button type="submit" class="btn btn-success sign_up" id="button" name="register">Register</button>
        </div>
    </div>

    <script src="./connection.php"></script>
</body>
</html>

<?php
    if($_POST['register'])
        {
            $name=$_POST['name'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $confirmpassword=$_POST['confirmpassword'];

            $query="INSERT INTO data values('$name', '$username', '$password', '$confirmpassword')";
            $data=mysqli_query($conn, $query);

            if($data)  
                {
                    echo "Data inserted into database";
                }

            else
                {
                    echo "failed";
                }
        }

        
?>