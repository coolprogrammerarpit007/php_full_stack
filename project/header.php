<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        html{
            font-size: 10px;
        }
        body{
            background-color: antiquewhite;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        a{
            text-decoration: none;
            color: #fff;
        }

        header{
            height: 10vh;
            font-size: 1.5rem;
            padding: 2rem;
            background-color: salmon;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header div{
            background-color: black;
            padding: 1rem 2rem;
            border-radius: 0.6rem;
            cursor: pointer;
        }

        header div:hover{
            background-color: seagreen;
            background-color: 1px solid #000;
        }

        

    </style>
</head>
<body>
<header>
    <div><a href="index.php">Home</a></div>
    <div><a href="profile.php">Profile</a></div>
    <?php if(empty($_SESSION['info'])):?>
        <div><a href="login.php">Login</a></div>
        <div><a href="register.php">SignUp</a></div>
    <?php else: ?>
        <div><a href="logout.php">Logout</a></div>
    <?php endif; ?>
</header>
</body>
</html>
