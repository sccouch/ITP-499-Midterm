<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Yelp</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
</head>
<body>

<div class="container">
    <h1 class="text-center">Yelp</h1></br></br>
    <?php if(is_null($restaurant)) : ?>
        <b>Restaurant not found</b></br>
    <?php endif; ?>
    <b>Reviews for <?php echo $restaurant->restaurant_name; ?></b>
    </br></br>
    <?php if(!is_null($restaurant->facebook_page)) : ?>
        <b>Facebook Activity</b></br>
        <li>Likes: <?php echo $fbpage->likes; ?></li>
        <li>Check-ins: <?php echo $fbpage->checkins; ?></li>
        <hr>
    <?php endif; ?>
    <?php foreach ($reviews as $review) : ?>
        <?php for($i = 1; $i <= $review->rating; $i++) :?>
            <img src="http://squarehaven.com/index/graphics/icons/small-star.png">
        <?php endfor; ?> </br></br>
        <?php echo $review->review_description ?> <hr>
    <?php endforeach; ?>

</div>
</body>
</html>