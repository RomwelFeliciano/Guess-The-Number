<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number</title>
    <link rel="stylesheet" href="css/style_start.css">
    <link rel="shortcut icon" href="Images/Logo.png">
</head>
<body>
    <div class="menu-container">
        <a class="menu" href="menu.php">Back to Main Menu</a>
    </div>
    <h1>Welcome to Guess the Number!</h1>
    <h2>Please enter your desire nickname and choose the difficulty you want to play.</h2>
    <h3>Easy: 1-5</h3>
    <h3>Medium: 1-10</h3>
    <h3>Hard: 1-15</h3>
    <hr>
    <br />
    <table>
        <form action="guessing.php" method="post">
        <tr>
            <th colspan="2">Player Form</th>
        </tr>
        <tr>
            <td>Nickname:</td>
            <td><input type="text" name="nickname" style="font-weight: bold;"></td>
        </tr>
        <tr>
            <td>Difficulty:</td>
            <td>
                <select name="difficulty" style="width:100%; font-weight: bold;">
                    <option value="Easy">Easy</option>
                    <option value="Medium">Medium</option>
                    <option value="Hard">Hard</option>
                </select>
            </td>
        </tr>
        <tr>
        <td colspan="2" class="btn-login"><button class="login" name="play" type="submit">Play</button></td>
        </tr>
        </form>
    </table>
    <br />
    <hr>
    <p>Instructions: <br />
    To play, the game chooses a mystery number and the player makes their lucky guess. Players are informed whether their guess is higher, lower, no input, string input or out of range than the mystery number. The player will try again but the mystery number will be changed accordingly. If the mystery number is got by the player a diamond will appear.</p>
</body>
</html>