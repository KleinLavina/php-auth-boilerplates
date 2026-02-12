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
  
   <div align="center" style="margin-top:50px;">
    <div style="width:300px; border: solid 1px #333333; " align="left">
     <div style="background-color:#333333; color:#FFFFFF; padding:3px;text-align:center;"><b>Login</b></div>
     <div style="margin:30px">
      <form action="check_login.php" method="post">
        <label>UserName  :</label><input type="text" name="username" class="box"/><br /><br />
        <label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
		<img id="imgcap" onclick="reloadCaptcha();return false;" src="inc/captcha.php" alt="CAPTCHA" width="100" height="30"><br/>
		<label>CAPTCHA  :</label><input id="captcha" placeholder="captcha" style="width:110px" name="captcha">
        <input type="submit" value=" Submit "/><br />
      </form>
      <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
     </div>
    </div>
   </div>
   
<?php
	$_SESSION['error_msg'] = '';
?>