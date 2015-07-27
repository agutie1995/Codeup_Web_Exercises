<?php
require_once 'public/function.php';
require_once 'Log.php';

class Auth
{
    public static $pass = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

    //Auth::attempt() will take in a $username and $password.
    public static function attempt($username, $password)
    {
        if (inputHas('username') && inputHas('password')){
            //If $username is guest and $password matches hashed password, then set the LOGGED_IN_USER session variable as before.
            if ($username && $password){
                $_SESSION["LOGGED_IN_USER"] = $_POST["username"];
                //Redirect browser
                header("Location: http://codeup.dev/authorized.php");
                exit();
            } else {
                echo "Login Failed.";
            //If username or password are incorrect, log an error: "User $username failed to log in!".
                $errorMessage = new Log();
                $errorMessage->error("Incorrect username or password");
            }
        }
    }

    public static function check()
    {
        //fill in function
    }

    public static function user()
    {
        //fill in function
    }

    public static function logout()
    {
        //fill in function
    }
}

