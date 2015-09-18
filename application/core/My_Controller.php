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

    public function validate($data) {
        $this->load->library('form_validation');
        $count = count($data);
        for($i = 0; $i < $count; $i++){
            $this->form_validation->set_rules($data[$i][0],$data[$i][1],$data[$i][2]);
        }
        return $this->form_validation->run();
    }

}