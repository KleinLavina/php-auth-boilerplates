
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML AND PHP</title>
    <link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/myjs.js"></script>
    <?php include'data.php'?>

</head>
<body>
    <div class="header">
        <?php include "header.php"; ?>
    </div>
    <div class="nav-bar">
        <ul>
            <li><a href='?page=homepage'>HOME</a></li>
			 <li><a href='?page=aboutpage'>ABOUT</a></li>
            <li><a href='?page=page1'>FOUR-COLUMN-ITEMS</a></li>
            <li><a href='?page=page2'>TWO-COLUMN-ITEMS</a></li>
            <li></li>
        </ul>
    </div>

<div class="all-content">
<?php 
	if (isset($_GET['page'])) {
		$pg = $_GET['page'];
			if ($pg == "page1") {
				include "page1.php";
				}
				elseif ($pg == "page2") {
				include "page2.php";
				}
				elseif ($pg == "aboutpage") {
				include "aboutpage.php";
				}
				elseif ($pg == "login") {
				include "login.php";
				}
				else {
				include "homepage.php";
					}
		} else { 
			include "homepage.php";
		}	
			?>

</div>

</body>
</html>
