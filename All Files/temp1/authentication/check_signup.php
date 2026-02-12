<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $captcha = $_POST['captcha'];
    $users = include "userdata.php"; 

    $message = authenticateUser($users, $username, $password, $captcha);
    echo $message;
}
function authenticateUser($data, $username, $password, $captcha) {
    if ($captcha === $_SESSION['code']) {
        foreach ($data as $user) {
            if ($user['username'] === $username) {
                
               // $_SESSION['login_user'] = $username;
                //$_SESSION['logged_in'] = 'yes';
				$_SESSION['error_msg'] = 'Username is in used.';
				  header("Location: ../index.php?page=signup");
              //  header("Location: ../index.php");
                exit;
            }
        }

       
       $_SESSION['login_user'] = $username;
       $_SESSION['logged_in'] = 'yes';
        header("Location: ../index.php");
         exit;

    } else {
       
        $_SESSION['error_msg'] = 'CAPTCHA did not match.';
        header("Location: ../index.php?page=signup");
        exit;
    }
}

?>





