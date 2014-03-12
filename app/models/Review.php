<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 3/11/14
 * Time: 7:02 PM
 */

class Review extends Eloquent {

    public static function findReviews($id) {

        $query = DB::table('reviews')
            ->select('restaurant_id', 'review_description', 'rating');
        if($id){
            $query->where('restaurant_id', 'LIKE', "%$id%");
        }

        $reviews = $query->get();
        return $reviews;
    }

} 