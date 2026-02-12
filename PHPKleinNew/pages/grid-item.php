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
            margin:20px;
            display: grid;
            grid-template-columns: repeat(4, 1fr); /* 4 items per row */
            gap: 20px; /* Space between items */
            padding: 0 20px; /* Add padding to the sides */
        }

        .item {
            background-color: #b7bfa9; /* Item Background Color */
            border-radius: 8px;
            padding: 15px;
            width: 250px; /* Increased width for items */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            display: flex; /* Use flexbox to center content */
            flex-direction: column; /* Align items vertically */
            align-items: center; /* Center items horizontally */
            justify-content: space-between;
            height:auto; /* Space out content */
        }

        .image-item {
            width: 100%; /* Make image item full width */
            height: 250px; /* Fixed height for images */
            overflow: hidden; /* Hide overflow */
            border-radius: 8px; /* Round image corners */
        }

        .image-item img {
            width: 100%; /* Responsive image */
            height: auto; /* Maintain aspect ratio */
        }

        .title-item {
            font-size: 1.2em; /* Decreased font size for item name */
            margin: 10px 0;
            color: #495f47; /* Title Color */
            text-align: center; /* Center text */
        }

        h3 {
            margin: 5px 0;
            color: #11130e; /* Price Color */
        }
    </style>
</head>
<body>

<div class="container">
    <?php foreach($clothes as $clothing) : ?>
        <div class="item">
            <h1 class="title-item"><?=$clothing['name']?></h1>
            <div class="image-item">
                <img src="images/<?=$clothing['image']?>" alt="<?=$clothing['name']?>">
            </div>
            <h3>Price: P<?= $clothing['price']?></h3>
            <h3>Size: <?= $clothing['size']?></h3>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>