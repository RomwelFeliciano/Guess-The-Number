<?php
    session_start();
    $_SESSION['random'] = rand(1, 5);
    $random = $_SESSION['random'];
    $hasWon = false;
    $shouldFinish = false;
    $submit = $_POST['answer'];
    $input = $_POST['userInput'];
    is_int($input);
        if(isset($submit)){
            if($_POST['userInput'] == NULL){
                $_SESSION['null']=true;
                $_SESSION['null-alert'] = "You didn't provided a number!!";
                header("Location: easy.php");
            }
            else{
                
                if(!ctype_digit($input))
                {
                    $_SESSION['has-string']=true;
                    $_SESSION['has-string-alert'] = "The variable you provided is not an integer!!";
                    header("Location: easy.php");
                }
                else
                {
                    if($input <= 0 || $input >= 6)
                    {
                        $_SESSION['out-of-bounds']=true;
                        $_SESSION['out-of-bounds-alert'] = "The variable you provided is not within the range!!";
                        header("Location: easy.php");
                    }
                    else
                    {
                        if($_POST['userInput']==$random){
                            $hasWon = true;
                            $shouldFinish = true;
                        }
                        else if($_POST['userInput'] > $random){
                            $_SESSION['lower']=true;
                            $_SESSION['lower_answer'] = "Should've Guess Lower, the random number is $random";
                            header("Location: easy.php");
                        }
                        else{
                            $_SESSION['higher']=true;
                            $_SESSION['higher_answer'] = "Should've Guess Higher, the random number is $random";
                            header("Location: easy.php");
                        }
                    }
                }
            }
        }
        if($hasWon){
            $_SESSION['win']=true;
            $_SESSION['win-number']=$random;
            $_SESSION['win-alert'] = "Congratulations you guessed it correctly!! " . "The random number is " . $random;
            $_SESSION['diamond'] = "What a wonderful diamond you had there!";
            header("Location: easy.php");
        }
    
?>