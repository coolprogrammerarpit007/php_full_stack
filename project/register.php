<?php
    require 'functions.php';
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // storing user details in the database

        $username = addslashes($_POST['username']);
        $email = addslashes($_POST['email']);
        $password = addslashes($_POST['password']);
        $date = date('Y-m-d H:i:s');

        // sql query to insert data into users table
        $sql = "insert into users (username,email,password,date) values ('$username','$email','$password','$date')";
        $result = mysqli_query($conn ,$sql);

        // redirecting towards the login page
        header("Location: login.php");
        die;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - My Website</title>

    <style>
        form{
            margin: auto;
            padding: 10px;
        }

        .form-container{
            height: 80vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        form{
            height: 50vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4rem;
            padding: 1rem;
        }

        form input{
            width: 50%;
            padding: 2rem 1rem;
            border-radius: 0.8rem;
            border: none;
        }

        form button{
            width:50%;
            padding:1.5rem 0.8rem;
            background-color: salmon;
            color:antiquewhite;
            border: none;
            border-radius: 1rem;
        }

        .sign-up-title{
            padding: 2rem;
        }
        .sign-up-title h3{
            text-align: center;
            color: #000;
            font-size: 1.5rem;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <?php 
    include "header.php";
    ?>

<div class="sign-up-title">
    <h3>Sign UP: Here</h3>
</div>
<div class="form-container">
    <form action="" method="post">
        <input type="text" name="username" id="" placeholder="UserName" required>
        <input type="email" name="email" id="" placeholder="Email" required>
        <input type="password" name="password" id="" placeholder="Password" required>
        <button>SignUp</button>
    </form>
</div>

<?php
    include "footer.php";
?>
    
</body>
</html>