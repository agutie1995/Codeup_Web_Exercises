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
                // Use the Log class to log an info message: "User $username logged in."
                $auth = new Log();
                $auth->info("User $username logged in.");
                
                //Redirect browser
                header("Location: http://codeup.dev/authorized.php");
                exit();
            } else {
                echo "Login Failed.";
            //If username or password are incorrect, log an error: "User $username failed to log in!".
                $auth->error("Incorrect username or password");
            }
        }
    }

    // Auth::check() will return a boolean whether or not a user is logged in
    public static function check()
    {
        if (!empty($_SESSION['LOGGED_IN_USER'])){
            return true;
            $_SESSION['LOGGED_IN_USER'];
        } else{
            return false;
            header("Location: http://codeup.dev/login.php");
            exit();
        }
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

