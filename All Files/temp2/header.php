<!DOCTYPE html>
<html>
<head>
    <style>
        /* Header styling */
        .header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
			background-color:green;
			color:yellow;
            position: relative;
        }

        /* Image logo styling */
        .header img {
            height: 70px;
            width: 70px;
            position: absolute;
            left: 20px;
        }

        /* Title styling */
        .header h1 {
            margin: 0;
            font-size: 2.5em;
            color: yellow; /* Green text */
        }

        /* Subtitle styling */
        .header h3 {
            margin: 0;
            font-weight: bold;
            color: yellow;
        }

        /* Button styling */
        .header .buttons {
            display: flex;
            gap: 10px;
            position: absolute;
            right: 20px;
        }

        .button {
            padding: 10px 20px;
            font-size: 18px;
			color: yellow;
			background-color: yellow;
		
            border: 2px solid #d0f0c0;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            text-decoration: none;
            font-weight: bold;
        }

        .button a {
            text-decoration: none;
			color:green;
            
        }

        .button:hover {
            background-color: blue;
           
        }
		.button a:hover {
           
            color: yellow;
        }
    </style>
</head>

<!-- Header with title, author, buttons, and logo -->
<div class="header">
    <img src="image/logo.png" alt="Logo">
    <div>
        <h1>DELICACY FRUITS</h1>
        <h3><b>BY: KLEIN F. LAVINA BSIT 3-T</b></h3>
    </div>
    
    <div class="buttons">
        <?php session_start(); ?>
        <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === 'yes'): ?>
            <!-- Show Log Out button if logged in -->
            <div class="button">
                <a href="?page=logout">Log Out</a>
            </div>
        <?php else: ?>
            <!-- Show Sign Up and Log In buttons if not logged in -->
            <div class="button">
                <a href="?page=signup">Sign Up</a>
            </div>
            <div class="button">
                <a href="?page=login">Log In</a>
            </div>
        <?php endif; ?>
    </div>
</div>

</html>
