<?php
require "functions.php"; // mag ook include zijn
$connection = dbConnect();

$result = $connection->query("SELECT * FROM `games` WHERE 'beoordelingen' > 95 ");
$result2 = $connection->query("SELECT * FROM `games` WHERE 'beoordelingen' <= 95 ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container_trending_cards">
                <?php foreach ($result as $row) : ?>
                    <article class="trending_card">
                        <figure>
                            <img class="product_card" src="img/<?php echo $row["img_link"] ?>" alt="">
                        </figure>
                        <div class="box_text">
                            <h2 class="titel_game"><?php echo $row["titel"]; ?></h2>
                            <h3 class="genre"><?php echo $row["genre"] ?></h3>
                            <span class="price"><?php echo $row["prijzen"]; ?></span>
                            <span class="percentage"><?php echo $row["beoordelingen"]; ?>%</span>
                            <a class="view" href="">weergave</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
</body>
</html>