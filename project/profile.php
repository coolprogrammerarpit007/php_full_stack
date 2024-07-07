<?php

require "functions.php";
check_login();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - My Website</title>

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

        form button{
            width:50%;
            padding:1.5rem 0.8rem;
            background-color: salmon;
            color:antiquewhite;
            border: none;
            border-radius: 1rem;
        }

        textarea{
            margin: 4px;
            padding: 8px;
            width: 50%;
        }

        .profile-title{
            padding: 2rem;
        }
        .profile-title h3{
            text-align: center;
            color: #000;
            font-size: 1.5rem;
            text-transform: uppercase;
        }

        .table{
            padding: 4rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <?php
include "header.php";

?>

<div class="profile-title">
    <h3>User Profile</h3>
</div>
<hr>
<div class="table">
    <table style="text-align: center;">
        <tr>
            <td><img src="img.jpg" alt="image" style="width:150px;height:150px;object-fit:cover;"></td>
        </tr>
        <tr>
            <td><?php echo $_SESSION['info']['username'] ?></td>
        </tr>
        <tr>
            <td><?php echo $_SESSION['info']['email'] ?></td>
        </tr>
    </table>
</div>
<div class="form-container">
    <form action="" method="post">
        <textarea name="post" id="post" rows="8" placeholder="Create a post here..."></textarea>
        <button>Post Message</button>
    </form>
</div>

<?php
include "footer.php";
?>

</body>
</html>