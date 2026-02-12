 <?php
// Start the session
	$error ='';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['error_msg'])){
	$error = $_SESSION['error_msg'];
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div align="center" style="margin-top:50px;">
    <div style="width:400px; border: solid 1px #4CAF50; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);" align="left">
        <div style="background-color:yellow; color:darkgreen; padding:10px; text-align:center; border: 1px solid black; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            <b>LOG IN</b>
        </div>
        <div style="margin:20px; padding:10px; background-color: #E9F3B0; color: #2C3E50;">
             <form action="check_login.php" method="post">
                <label style="font-weight: bold;">USERNAME:</label><br />
                <input type="text" name="username" class="box" 
                       style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #4CAF50; border-radius: 5px;" 
                       placeholder="Enter your username" 
                       title="Your username (e.g., john_doe)"/><br /><br />
                
                <label style="font-weight: bold;">PASSWORD:</label><br />
                <input type="password" name="password" class="box" 
                       style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #4CAF50; border-radius: 5px;" 
                       placeholder="Enter your password" 
                       title="Your password (8+ characters)"/><br/><br />
					   
				<label style="font-weight: bold;">CAPTCHA:</label>
				<img id="imgcap" onclick="reloadCaptcha();return false;" src="inc/captcha.php" alt="CAPTCHA" style="height:30px;width:70px;position:relative;top:5px;">
				<i class="fa fa-refresh" style="font-size:24px" onclick="reloadCaptcha();return false;"></i><br />
                <input type="text" name="captcha" class="box" id="captcha"
                       style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #4CAF50; border-radius: 5px;" 
                       placeholder="Enter the captcha" /><br /><br />
				
				
                <div style="margin: 10px 0;">
                    <input type="checkbox" id="remember" name="remember" style="margin-right: 5px;"/>
                    <label for="remember">Remember Me</label>
                </div>
                
                <input type="submit" value="Submit" style="font-size:20px;width: 100%; padding: 10px; background-color: #4CAF50; color: yellow; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;"/>
            </form>		
			
            <div style="font-size:18px; color:#cc0000; margin-top:10px; text-align:center;"><?php echo $error; ?></div>
            <div style="font-size:12px; text-align:center; margin-top:10px;">
                <a href="#" style="color: #4CAF50; text-decoration: none;">Forgot Password?</a>
            </div>
            <div style="text-align:center; margin-top:20px;">
                <button style="padding: 10px 20px; background-color: #FFC107; color: darkgreen; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                    Sign Up
                </button>
            </div>
        </div>
    </div>
</div>
<?php
	$_SESSION['error_msg'] = '';
?>
