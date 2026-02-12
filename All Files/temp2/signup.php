<?php
// Start the session
$error = '';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['error_msg'])) {
    $error = $_SESSION['error_msg'];
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div align="center" style="margin-top:50px;">
    <div style="width:400px; border: solid 1px #c1c1c1; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);" align="left">
        <div style="background-color: #6dbf00; color: #fff; padding:10px; text-align:center; border: 1px solid #4CAF50; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <b>Sign Up</b>
        </div>
        <div style="margin:20px; padding:10px; background-color: #f9e55e; color: #111;">
            <form action="check_signup.php" method="post">

            <label style="font-weight: bold; color: #111;">Nickname:</label><br />
                <input type="text" name="niclname" class="box" 
                       style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #c1c1c1; border-radius: 5px; background-color: #fff; color: #111;" 
                       placeholder="Enter your nickname" 
                       title="Your username (e.g., john_doe)"/><br /><br />
                 
                <label style="font-weight: bold; color: #111;">USERNAME:</label><br />
                <input type="text" name="username" class="box" 
                       style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #c1c1c1; border-radius: 5px; background-color: #fff; color: #111;" 
                       placeholder="Enter your username" 
                       title="Your username (e.g., john_doe)"/><br /><br />
                
               <label style="font-weight: bold; color: #111;">PASSWORD:</label><br />
                <div style="position: relative;">
                    <input type="password" name="password" class="box" 
                           id="password" 
                           style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #c1c1c1; border-radius: 5px; background-color: #fff; color: #111;" 
                           placeholder="Enter your password" 
                           title="Your password (8+ characters)"/><br />
                    <i class="fa fa-eye" id="togglePassword" 
                       style="position: absolute; top: 10px; right: 10px; cursor: pointer; font-size: 18px;"></i>
                </div><br/><br />
                       
                <label style="font-weight: bold; color: #111;">CAPTCHA:</label>
                <img id="imgcap" onclick="reloadCaptcha();return false;" src="inc/captcha.php" alt="CAPTCHA" style="height:30px;width:70px;position:relative;top:5px;">
                <i class="fa fa-refresh" style="font-size:24px; color: #111;" onclick="reloadCaptcha();return false;"></i><br />
                <input type="text" name="captcha" class="box" id="captcha"
                       style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #c1c1c1; border-radius: 5px; background-color: #fff; color: #111;" 
                       placeholder="Enter the captcha" /><br /><br />
                
                <div style="margin: 10px 0;">
                    <input type="checkbox" id="remember" name="remember" style="margin-right: 5px;"/>
                    <label for="remember" style="color: #111;">Remember Me</label>
                </div>
                
                <input type="submit" value="Submit" style="font-size:20px;width: 100%; padding: 10px; background-color: #ffcc00; color: #111; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;"/>
            </form>
            
            <div style="font-size:18px; color:#cc0000; margin-top:10px; text-align:center;"><?php echo $error; ?></div>
            <div style="font-size:12px; text-align:center; margin-top:10px;">
                <a href="#" style="color: #6dbf00; text-decoration: none;">Forgot Password?</a>
            </div>
            
        </div>
    </div>
</div>
<script>
    // Show / Hide password
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function (e) {
        // Toggle the type attribute
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;

        // Toggle the eye icon
        this.classList.toggle('fa-eye-slash');
    });
</script>
<?php
$_SESSION['error_msg'] = '';
?>
