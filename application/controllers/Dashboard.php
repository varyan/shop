<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('company_model');
        $this->load->library('cart');
        $this->_set_data_params();

        /* $this->cart->destroy();
         session_destroy();*/
    }

    /** -------------------------------------
     *  @param string (default index)
     *  -------------------------------------
     */
    public function view($page = 'index') {
        $this->data['content']['title'] = ucfirst($page);
        if( !file_exists(VIEWPATH.'admin/pages/'.$page.'.php'))
        {
            show_404();
        } else {
            $this->data['content']['page'] = $page;
            $this->load->view('admin/includes/content',$this->data['content']);
        }
    }

    /** -------------------------------------
     *  Go to NewOrder page
     *  -------------------------------------
     */
    public function new_order() {
        redirect(base_url('new_order'));
    }

    /** -------------------------------------
     *  Go to NewOrder page
     *  -------------------------------------
     */
    public function cancel() {

        $this->cart->destroy();
        $this->session->unset_userdata('info');
        $this->session->unset_userdata('company_id');
        $this->session->unset_userdata('row_id');
        redirect(base_url('index'));
    }

    /** -------------------------------------
     * Go to Company page
     * @param string
     *  -------------------------------------
     */
    public function open_company_page($id) {

        if (!$this->session->companyId) {
            $this->session->set_userdata('companyId',NULL);
        }

        $this->session->companyId = $id;

        redirect('company_page');

    }

    /** -------------------------------------
     * Create new Company and redirect to it's page
     *  -------------------------------------
     */
    public function create_company() {

        $this->company_model->create_new_company($this->input->post('value'));

        if (!$this->session->companyId) {
            $this->session->set_userdata('companyId',NULL);
        }

        $this->session->companyId = $this->db->insert_id();
    }

    /** --------------------------------------------------------------------------------
     * FUNCTIONS WHITCH ARE WORKNG WITH AJAX
     *  --------------------------------------------------------------------------------
     */


    /** -------------------------------------
     *  Working with ajax for show the all companies and current company name by input value
     *  -------------------------------------
     */
    public function get_companies() {

        $this->data['indexCompany'] = $this->company_model->get_company_by_name($_POST['value']);

        if (!$this->data['indexCompany']) {
            $this->data['indexCompany'][0]['name'] = $_POST['value'];
        } else {
            $this->data['indexCompany'] = false;
        }

        $this->load->view('private/for_get_companies', array(
                'companyList' => $this->data['companyList'],
                'indexCompany' => $this->data['indexCompany'],
            )
        );
    }

    /** -------------------------------------
     *  Working with ajax for show info from Company form in Ship To div#ship1
     *  -------------------------------------
     */
    public function show_company_info() {
        $this->data['info'] = $this->input->post();

        echo $this->json($this->data['info']);
        /*$this->load->view('private/for_ship1', array('info' => $this->data['info']));*/
    }

    /** -------------------------------------
     *  Working with ajax for show Order info
     *  -------------------------------------
     */
    public function review_order() {
        $this->data['sess'] = $this->session->info;
        $this->load->view('private/for_review',array('sess' => $this->data['sess']));
    }


    /** -------------------------------------
     *  Process and validate FORM
     *  -------------------------------------
     */
    public function processing_form() {


        if ($this->validate(array(
            array(
                'companyName','companyName','required'
            ),
            array(
                'companyPhone', 'companyPhone', 'numeric'
            ),
            array(
                'companyExt','companyExt','numeric'
            ),
            array(
                'companyFax','companyFax','numeric'
            ),
            array(
                'companyCustomer', 'companyCustomer','required'
            ),/*
                    array(
                        'companyNotes', 'companyNotes',
                    ),
                    array(
                        'companyAdminNotes', 'companyAdminNotes',
                    ),*/
            array(
                'contactFname','contactFname','required'
            ),
            array(
                'contactLname','contactLname','required'
            ),
            array(
                'contactEmail', 'contactEmail','required|valid_email'
            ),/*
                    array(
                        'contactTitle', 'contactTitle',
                    ),*/
            array(
                'contactPhone', 'contactPhone','numeric'
            ),
            array(
                'contactExt','contactExt','numeric'
            ),
            array(
                'shipAddress1','shipAddress1','required'
            ),/*
                    array(
                        'shipAddress2','shipAddress2',
                    ),*/
            array(
                'shipCity','shipCity','required'
            ),
            array(
                'shipState','shipState','required'
            ),
            array(
                'shipZip','shipZip','required|numeric'
            ),/*
                    array(
                        'shipCountry','shipCountry',
                    ),*/
            array(
                'shipingCenter','shipingCenter','required'
            ),
            array(
                'shippingType','shippingType','required'
            ),/*
                    array(
                        'shipingStartDate','shipingStartDate',
                    ),
                    array(
                        'shipingEndDate','shipingEndDate',
                    ),
                    array(
                        'billingPONumber', 'billingPONumber',
                    ),
                    array(
                        'billingPaymentTerms','billingPaymentTerms',
                    ),*/
            array(
                'billingPermentType','billingPermentType','required'
            ),
            array(
                'paymentNameOnCard','paymentNameOnCard','required'
            ),
            array(
                'paymentCardName','paymentCardName','required'
            ),
            array(
                'paymentSecurityCode','paymentSecurityCode','required|numeric'
            ),
            array(
                'paymentBillingAddress','paymentBillingAddress','required'
            ),
            array(
                'paymentCity','paymentCity','required'
            ),
            array(
                'paymentState','paymentState','required'
            ),
            array(
                'paymentZip','paymentZip','required|numeric'
            ),
            array(
                'paymentExpDate','paymentExpDate','required'
            ),/*
                    array(
                        'paymentDefaultCard','paymentDefaultCard',
                    ),
                    array(
                        'additionaSafesRep','additionaSafesRep',
                    ),
                    array(
                        'additionalPaymentTerms','additionalPaymentTerms',
                    ),
                    array(
                        'additionalPaymentType','additionalPaymentType',
                    ),
                    array(
                        'additionalSalesTax','additionalSalesTax',
                    ),
                    array(
                        'additionalProfileId','additionalProfileId',
                    ),
                    array(
                        'additionalB2BorB2C','additionalB2BorB2C',
                    ),
                    array(
                        'additionalLeadSource','additionalLeadSource',
                    ),
                    array(
                        'additionalResellerNumber','additionalResellerNumber',
                    )*/
                 )
            )
        ) {

            $arr = [];
            foreach($this->input->post() as $key => $value) {
               $arr[$key] = $value;
            };

            $this->session->set_userdata('info', $arr);


            echo $this->json(array(),'Success', 'SUCCESS');
        } else {
            echo $this->json(array(),'Success', 'ERROR');
        }

    }

    /** -------------------------------------
     *  Create order using cart-info and form-info
     *  -------------------------------------
     */
    public function create_order() {

        $this->company_model->create_order($this->input->post());


        $this->cart->destroy();
        $this->session->unset_userdata('info');
        $this->session->unset_userdata('companyId');
        $this->session->unset_userdata('row_id');
        redirect('index');
    }


    /** -------------------------------------
     *  SET $data parameters for any action
     *  -------------------------------------
     */
    private function _set_data_params() {
        $this->data = array(
            'companyList' => $this->company_model->get_company_list(),
        );
    }
}