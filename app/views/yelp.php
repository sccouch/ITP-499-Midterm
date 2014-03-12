<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Yelp</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
    <h1 class="text-center">Yelp</h1>
        <?php foreach ($restaurants as $restaurant) : ?>
            <b><?php echo $restaurant->restaurant_name; ?> (<?php echo $restaurant->city; ?>)</b>
                </br></br>
            <?php echo $restaurant->type; ?></br></br>
            <?php if(!is_null($restaurant->facebook_page)) : ?>
            Facebook Page: <a href=http://www.facebook.com/<?php echo $restaurant->facebook_page; ?>>here</a>
            <?php else: ?>
            No Facebook page
            <?php endif; ?>
            </br></br>
            <a href="/restaurants/<?php echo $restaurant->id; ?>/reviews">View Reviews</a>
            <hr>
        <?php endforeach; ?>
</div>
</body>
</html>