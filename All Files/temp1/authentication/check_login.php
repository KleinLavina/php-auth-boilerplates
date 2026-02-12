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
            if ($user['username'] === $username && $user['password'] === $password) {
                
                $_SESSION['login_user'] = $username;
                $_SESSION['logged_in'] = 'yes';
                header("Location: ../index.php");
                exit;
            }
        }

       
        $_SESSION['error_msg'] = 'Invalid username or password.';
        header("Location: ../index.php?page=login");
        exit;

    } else {
       
        $_SESSION['error_msg'] = 'CAPTCHA did not match.';
        header("Location: ../index.php?page=login");
        exit;
    }
}

?>
<?php if (isset($_SESSION['error_msg'])): ?>
    <p><?php echo $_SESSION['error_msg']; ?></p>
    <?php unset($_SESSION['error_msg']); ?>
<?php endif; ?>

<form method="POST" action="index.php">
    <label for="username">Username</label>
    <input type="text" name="username" required>
    <label for="password">Password</label>
    <input type="password" name="password" required>
    <button type="submit">Log In</button>
</form>