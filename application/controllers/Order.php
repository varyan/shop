<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 17.09.2015
 * Time: 12:24
 */

class Order extends My_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('order_model');
    }

    /** -------------------------------------
     *  Redirect Order Process
     *  -------------------------------------
     */
    public function order_process() {

        $this->session->set_userdata('order', array('order_id' => $this->input->get('order_id')));

        redirect('order_process');
    }


    /** -------------------------------------
     *  Get Ship info from DB
     *  -------------------------------------
     */
    public function get_ship_info() {

        $this->data['ship_to'] = $this->order_model->get_ship_info($this->input->post('id'));

        $this->load->view('private/order/for_get_ship_info', array('ship_to' => $this->data['ship_to']));
    }

    /** -------------------------------------
     *  Calculate Shipping Cost
     *  -------------------------------------
     */
    public function calculate() {

    }


    /** -------------------------------------
     *  For Shipment Form
     *  -------------------------------------
     */
    public function shipment() {

    }


}