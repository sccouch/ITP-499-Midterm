<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 3/11/14
 * Time: 6:09 PM
 */

class Restaurant extends Eloquent {

    public static function listRestaurants() {

        $query = DB::table('restaurants')
            ->select('id', 'restaurant_name', 'type', 'city', 'facebook_page');

        $restaurants = $query->get();
        return $restaurants;
    }

    public static function findRestaurant($id) {
        $query = DB::table('restaurants')
            ->select('id', 'restaurant_name', 'facebook_page');
        if ($id) {
            $query->where('id', 'LIKE', "%$id%");
        }
        $restaurant = $query->get();
        return $restaurant;
    }



}