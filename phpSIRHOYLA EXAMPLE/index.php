<!doctype html>
<html>
	<head>
		<title>My page</title>
	</head>
	<body>
		<div>
			<?php include "header.php"; ?>
		</div>
		<div id="menu">
			<a href="?page=1">Page 1</a>
			<a href="?page=2">Page 2</a>
			<a href="?page=login">Login</a>
		</div>
		<div style="width:600px;min-height:350px;border:1px solid;">
			<?php 
				if(isset($_GET['page'])) {
					$pg = $_GET['page'];
					if ($pg == "1") {
						include "pg1.php";
					}
					elseif ($pg == "2") {
						include "pg2.php";
					}
					elseif ($pg == "login") {
						include "login.php";
					}
				}	
			?>
		</div>
		<div>
			<?php include "footer.php"; ?>
		</div>
	</body>
</html>