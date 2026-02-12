<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Items</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Basic Reset */
        body {
            font-family: Arial, sans-serif;
            background-color: #11130e; /* Background Color */
            color: #e8ebe4; /* Text Color */
            margin: 0;
        }

        .container {
            margin: 20px;
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* 2 items per row */
            gap: 20px 80px; /* Space between items */
            padding: 0 20px; /* Add padding to the sides */
        }

        .item {
            background-color: #b7bfa9; /* Item Background Color */
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex; /* Use flexbox to center content */
            flex-direction: row-reverse; /* Align items vertically */
            align-items: center; /* Center items horizontally */
            justify-content: space-around;
        }

        .image-item {
            width: 300px; /* Make image item full width */
            height: auto; /* Fixed height for images */
            overflow: hidden; /* Hide overflow */
            border-radius: 8px; /* Round image corners */
        }

        .text-item {
            width: 250px;
            height: auto;
            overflow: hidden;
            text-align: center;
        }

        .image-item img {
            width: 100%; /* Responsive image */
            height: auto; /* Maintain aspect ratio */
        }

        .title-item {
            font-size: 2.0em; /* Font size for item name */
            margin: 10px 0;
            color: #3d3533; /* Title Color */
            text-align: center; /* Center text */
			
        }

        .h3 {
            margin: 5px 0;
            color: white; /* Price Color */
            text-align: center;
			background-color:grey;
			padding:10px;
			border-radius:10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: repeat(1, 1fr); /* 1 item per row on smaller screens */
            }

            .item {
                flex-direction: column; /* Stack content vertically */
            }

            .image-item {
                width: 100%; /* Make image take full width of item */
            }

            .text-item {
                width: 100%;
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            .container {
                grid-template-columns: repeat(2, 1fr); /* 2 items per row for tablets */
            }
        }

    </style>
</head>
<body>

<div class="container">
    <?php foreach($fruits1 as $fruit) : ?>
                <div class="item">
					<div style="height:300px;">
						<h1 class="title-item"><?=$fruit['name']?></h1>
						<div class="h3">Price Per Piece: P<?= $fruit['perPiece']?></div>
						<div class="h3">Price Per Kilo: P<?= $fruit['perKilo']?></div>
						</div>
                    <div class="image-item">
                        <img src="image/<?=$fruit['image']?>">
                    </div>
                </div>
            <?php endforeach; ?>
</div>

</body>
</html>