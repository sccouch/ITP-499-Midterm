<?php
/**
 * Created by PhpStorm.
 * User: sccouch
 * Date: 3/11/14
 * Time: 7:22 PM
 */

namespace Yelp\Facebook;

class FacebookPage {
    protected $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function get() {
        $endpoint = 'http://graph.facebook.com/' . $this->id;
        //var_dump($endpoint);
        $json = file_get_contents($endpoint);
        return json_decode($json);
    }
}