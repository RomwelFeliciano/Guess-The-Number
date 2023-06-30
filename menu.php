<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu - Guess the Number</title>
    <link rel="stylesheet" href="css/style_menu.css">
    <link rel="shortcut icon" href="Images/Logo.png">
</head>
<body>
    <img src="Images/logo1.png" alt="Logo">
    <?php
        if(isset($_SESSION['username']))
        {
            echo "<h1>WELCOME " . $_SESSION['username']."</h1>";
        
            echo "<a href='start.php'><input type=button class='st' name='start' value='Start'><br />";
        
            echo "<br /><a href='logout.php'><input type=button name='logout' value='Logout'></a>";
        }
        if(isset($_POST['login']))
        {
                
            if (isset($_POST["username"]) && !isset($_SESSION["username"])) 
            {
                $users = [
                  "user1" => "12345",
                  "user2" => "54321",
                  "admin" => "admin123"
                ];
                
                if (isset($users[$_POST["username"]]))
                {
                    if ($users[$_POST["username"]] == $_POST["password"]) 
                    {
                        $_SESSION["username"] = $_POST["username"];
                        header('location: menu.php');
                    }
                    else
                    {
                        echo "<script>alert('password incorrect!')</script>";
            
                        echo "<script>location.href='index.php'</script>";
                    }
                }
                else
                {
                    echo "<script>alert('username incorrect!')</script>";
            
                    echo "<script>location.href='index.php'</script>";
                }
            }
        }
    ?>
</body>
</html>