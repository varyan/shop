<?php


class Inventory extends My_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
}

?>