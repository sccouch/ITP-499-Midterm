<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    $restaurants = Restaurant::listRestaurants();

	return View::make('yelp', [
        'restaurants' => $restaurants
    ]);
});

Route::get('restaurants/{id}/reviews', function($id)
{
    $reviews = Review::findReviews($id);
    $restaurant = Restaurant::findRestaurant($id)[0];
    if(!is_null($restaurant->facebook_page)) {
        $fbpage = new \Yelp\Facebook\FacebookPage($restaurant->facebook_page);
        $fbpage = $fbpage->get();
    }
    else
        $fbpage = null;

    return View::make('review', [
        'reviews' => $reviews,
        'restaurant' => $restaurant,
        'fbpage' => $fbpage
    ]);
});