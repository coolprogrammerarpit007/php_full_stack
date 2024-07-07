<?php
require 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // storing user details in the database

    $email = addslashes($_POST['email']);
    $password = addslashes($_POST['password']);

    // sql query to insert data into users table
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // storing the data into session
        $_SESSION['info'] = $row;
        header("Location: profile.php");
        die;
    }
    else{
        $error = 'wrong email or password!';
    }
    // redirecting towards the login page
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
        .log-in-title h3{
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
<?php 
if(!empty($error)){
    echo "<div>" . $error . "</div>";
}


?>

<div class="log-in-title">

    <h3>Log In: Here</h3>
</div>
<div class="form-container">
    <form action="" method="post">
        <input type="text" name="email" id="" placeholder="Email" required>
        <input type="password" name="password" id="" placeholder="Password" required>
        <button>Login</button>
    </form>
</div>

<?php
include "footer.php";
?>

</body>
</html>