<?php
require_once 'Input.php';
require_once 'Log.php';

class Auth
{
    public static $pass = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

    //Auth::attempt() will take in a $username and $password.
    public static function attempt($username, $password)
    {
        if (Input::has('username') && Input::has('password')){
            $_SESSION["LOGGED_IN_USER"] = $_POST["username"];
            // Use the Log class to log an info message: "User $username logged in."
            Log::info("User $username logged in.");
        } else {
            echo "Login Failed.";
            //If username or password are incorrect, log an error: "User $username failed to log in!".
            Log::error("Incorrect username or password");
        }
    }

    // Auth::check() will return a boolean whether or not a user is logged in
    public static function check()
    {
        if (!empty($_SESSION['LOGGED_IN_USER'])){
            return true;
        } else{
            return false;
        }
    }

    // Auth::user() will return the username of the currently logged in user
    public static function user()
    {
        if (isset($_SESSION['LOGGED_IN_USER'])){
            return $username;
        }
    }

    // Auth::logout() will end the session, just like we did in the sessions exercise
    public static function logout()
    {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
    }
}

