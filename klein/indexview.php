 <?php foreach($fruits1 as $fruit) : ?>
                <div class="item">
                    <h1 class="title-item"><?=$fruit['name']?></h1>
                    <div class="image-item">
                        <img src="image/<?=$fruit['image']?>">
                    </div>
                    <h3>Price Per Piece: P<?= $fruit['perPiece']?></h3>
                    <h3>Price Per Kilo: P<?= $fruit['perKilo']?></h3>
                </div>
            <?php endforeach; ?>