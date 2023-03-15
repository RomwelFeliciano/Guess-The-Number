<?php
    session_start();

    $session = isset($_SESSION['in_session']);
            
    if($session && $session==true)
    {
        //Leave it blank to enter a new page
    }
    else
    {
        header("location: start.php");             
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hard - Guess the Number</title>
    <link rel="stylesheet" href="css/style_result.css">
    <link rel="shortcut icon" href="Images/Logo.png">
</head>
<body>
    <?php
        if(array_key_exists('quit', $_POST)) {
            quit();
        }
        function quit() {
            session_start();
            header('Location: start.php');
        }
    ?>
    
    <div class="upper-left">
    <form method='post'>
        <input type="submit" class="quit" name="quit" value="Quit">
    </form>
    </div>

    <div>
        <img class="banner" src="Images/Hard_Banner.png" alt="Banner">
    </div>

    <h2>Welcome <?php echo $_SESSION['nickname']?></h2>
    <h2>Goodluck and Have Fun!</h2>
    <form action="hard_function.php" method="post">
    <table>
            <tr>
                <th colspan="2">Guess the number from 1 to 15</th>
            </tr>
            <tr>
                <td class="inp">User Input:</td>
                <td class="inp"><input type="text" name="userInput" style="font-weight: bold;"></td>
            </tr>
            <tr>
                <td colspan="2" class="btn-answer"><button class="answer" type="submit" name="answer">Answer</td>
            </tr> 
        </table>
        <?php
            $n = isset($_SESSION['null']);
            $hs = isset($_SESSION['has-string']);
            $oob = isset($_SESSION['out-of-bounds']);
            $l = isset($_SESSION['lower']);
            $h = isset($_SESSION['higher']);
            $w = isset($_SESSION['win']);
            if($n && $n==true)
            {
                echo "
                <p id='show-message'>".$_SESSION['null-alert']."</p>
                ";
                unset($_SESSION['null']);
            }
            else if($hs && $hs==true)
            {
                echo "
                <p id='show-message'>".$_SESSION['has-string-alert']."</p>
                ";
                unset($_SESSION['has-string']);
            }
            else if($oob && $oob==true)
            {
                echo "
                <p id='show-message'>".$_SESSION['out-of-bounds-alert']."</p>
                ";
                unset($_SESSION['out-of-bounds']);
            }
            else if($l && $l==true)
            {
                echo "
                <p id='show-message'>".$_SESSION['lower_answer']."</p>
                ";
                unset($_SESSION['lower']);
            }
            else if($h && $h==true)
            {
                echo "
                <p id='show-message'>".$_SESSION['higher_answer']."</p>
                ";
                unset($_SESSION['higher']);
            }
            else if($w && $w==true)
            {
                echo "
                <p id='show-message'>".$_SESSION['win-alert']."</p>
                ";
                echo "
                <p id='show-message'>".$_SESSION['diamond']."</p>
                ";
                for($row = 0; $row <= $_SESSION['win-number']; $row ++)
                {
                    for($col = 0; $col < $row; $col++)
                    {
                        echo "&nbsp*&nbsp";
                    }
                    echo "<br/>";
                }
                for($row = 0; $row <= $_SESSION['win-number']; $row++)
                {
                    for($col = $_SESSION['win-number']-1; $col > $row; $col--)
                    {
                        echo "&nbsp*&nbsp";
                    }
                    echo "<br/>";
                }
                unset($_SESSION['win']);
            }
        ?>
    </form>
    <div class="footer">
        <h6>&copy; Copyright by Group 2</h6>
    </div>
</body>
</html>