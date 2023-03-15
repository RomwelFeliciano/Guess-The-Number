<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number</title>
</head>
<body>
    <?php
        session_start();
        if($_POST['nickname'] == "")
        {
            echo "
                <script type='text/javascript'>
                    
                    window.location.href='start.php';
                    alert('Please provide a nickname');
                </script>
            ";
        }
        else if($_POST['difficulty']=='Easy'){
            $_SESSION['easy_func']=true;
            $_SESSION['in_session']="'easy_func'";
            $_SESSION['nickname']=$_POST['nickname'];
            header("Location: easy.php");   
        }
        else if($_POST['difficulty']=='Medium'){
            $_SESSION['medium_func']=true;
            $_SESSION['in_session']="'medium_func'";
            $_SESSION['nickname']=$_POST['nickname'];
            header("Location: medium.php");
        }
        else if($_POST['difficulty']=='Hard'){
            $_SESSION['hard_func']=true;
            $_SESSION['in_session']="'hard_func'";
            $_SESSION['nickname']=$_POST['nickname'];
            header("Location: hard.php");
        }
    ?>
</body>
</html>