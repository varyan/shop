<?php


class Customer extends My_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

    /** -------------------------------------
     *  Show Customer Info With Ajax
     *  -------------------------------------
     */
    public function customer_info() {

        /*SELECT COMPANY WITH $this->input->post('id') and send info for customer page*/


        $this->load->view('private/customer/for_customer_info', array('order_id' => $this->input->post('id')));
    }


}

?>