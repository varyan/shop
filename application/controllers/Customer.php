<?php


class Customer extends My_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('customer_model');
    }

    /** -------------------------------------
     *  Show Customer Info With Ajax
     *  -------------------------------------
     */
    public function customer_info_by_order() {

        /*SELECT COMPANY WITH $this->input->post('id') and send info for customer page*/


        $this->data['customer']['companyInfo'] = $this->customer_model->get_customer_info($this->input->post('id'));

        $this->load->view('private/customer/for_customer_info', $this->data['customer']);
    }

    /** -------------------------------------
     *  Show All Customers With Ajax
     *  -------------------------------------
     */
    public function customer_info() {

        $this->data['customers_by_type'] = $this->customer_model->get_customers_by_type($this->input->post('type'));

        $this->load->view('private/customer/for_all_customers', array('customers' => $this->data['customers_by_type']));
    }

    /** -------------------------------------
     *  Show Current Customer Info With Ajax
     *  -------------------------------------
     */
    public function customers_info() {

        $customers = $this->customer_model->get_customers($this->input->post('companyId'));
        $this->load->view('private/customer/for_customer_info', array('companyInfo' => $customers));

    }

}

?>