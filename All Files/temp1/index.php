<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyxify Collection - Home</title>
    <link rel="stylesheet" href="css/styles.css">
    <?php include'../data/data.php'?>
	<script src="js/myjs.js"></script>
</head>
<body>
<header>
	<?php include"header.php" ?>
</header>

    <nav>
            <ul>
                <li><a href="?page=home">Home</a></li>
                <li><a href="?page=about">About</a></li>
                <li><a href="?page=row-item">Item</a></li>
                <!--<li><a href="?page=grid-item">Grid-Item</a></li>-->
                <li><a href="?page=services">Services</a></li>
                <li><a href="?page=contact">Contact</a></li>
            </ul>
    </nav>  

<div class="all-content">
<?php 
	if (isset($_GET['page'])) {
		$pg = $_GET['page'];
			if ($pg == "home") {
				include "pages/home.php";
				}
				elseif ($pg == "about") {
				include "pages/about.php";
				}
				elseif ($pg == "row-item") {
				include "pages/row-item.php";
				}
                elseif ($pg == "grid-item") {
                include "pages/grid-item.php";
                }
                elseif ($pg == "services") {
                include "pages/services.php";
                }
                elseif ($pg == "login") {
                include "pages/login.php";
                }
				 elseif ($pg == "signup") {
                include "pages/signup.php";
                }
				elseif ($pg == "logout") {
				include "logout.php";
				}
				elseif ($pg == "contact") {
				include "pages/contact.php";
				}
				else {
				include "pages/home.php";
					}
		} else { 
			include "pages/home.php";
		}	
			?>

</div>

	<?php 
	$users = include "authentication/userdata.php"; 
	echo findUser($users, "kleinlav7");

		function findUser($users, $findUser) {
			$found = "No";
				foreach ($users as $user) {
					if ($user['username'] === $findUser) {
						$found = "Yes";
						break;
				}
			}
			return $found;
}
?>
    <footer>
    <?php include "footer.php"; ?>
    </footer>
</body>
</html>
