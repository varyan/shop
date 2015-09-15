<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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