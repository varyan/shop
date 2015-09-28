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
        /*$this->session->set_userdata('boxes', array());
        $this->session->boxes[] = $this->get_box($this->session->order);*/

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
     *  Get box info for current order
     *  -------------------------------------
     */
    public function get_box() {

        $this->data['boxInfo'] = $this->order_model->get_box($this->input->post('id'));

        $this->load->view('private/order/for_show_box_info', array(
                'boxInfo' => $this->data['boxInfo']
            )
        );

    }

    /** -------------------------------------
     *  Delete box info for current order
     *  -------------------------------------
     */
    public function delete_box() {
        $this->order_model->delete_box($this->input->post('boxId'), $this->input->post('orderId'));
    }

    /** -------------------------------------
     *  Add box info for current order
     *  -------------------------------------
     */
    public function add_box() {

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