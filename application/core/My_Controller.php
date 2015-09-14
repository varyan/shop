<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 14.09.2015
 * Time: 21:23
 */

class My_Controller extends CI_Controller {

    /**
     * ---------------------------------------
     * Call the parent class constructor
     * ---------------------------------------
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * ---------------------------------------
     * @param array
     * @param string (default success)
     * @param string (default success saved)
     *
     * @return array (JSON)
     * ---------------------------------------
     */
    public function json($data, $status= "success", $message = "success saved" ) {

        return json_encode([
            'response' => $data,
            'status' => $status,
            'message' => $message
        ]);
    }


}