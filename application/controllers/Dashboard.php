<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {


    private $data = [];


    public function __construct() {
        parent::__construct();
        $this->load->model('company_model');
        $this->load->model('product_model');
        $this->load->library('cart');
        $this->__setDataParams();

        /*  $this->cart->destroy();
            session_destroy(); */
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
    public function newOrder() {
        redirect(base_url('newOrder'));
    }


    /** -------------------------------------
     *  Go to NewOrder page
     *  -------------------------------------
     */
    public function cancel() {
        redirect(base_url('index'));
    }

    /** -------------------------------------
     * Go to Company page
     * @param string
     *  -------------------------------------
     */
    public function OpenCompanyPage($data) {

        if (!$this->session->companyId) {
            $this->session->set_userdata('companyId',NULL);
        }

        $this->session->companyId = $data;

        redirect('CompanyPage');

    }

    /** -------------------------------------
     * Create new Company and redirect to it's page
     * @param string $comp_name
     *  -------------------------------------
     */
    public function createCompany($comp_name) {

        $this->company_model->createNewCompany($comp_name);

        if (!$this->session->companyId) {
            $this->session->set_userdata('companyId',NULL);
        }

        $this->session->companyId = $this->db->insert_id();

        redirect('CompanyPage');

    }


    /** --------------------------------------------------------------------------------
     * FUNCTIONS WHITCH ARE WORKNG WITH AJAX
     *  --------------------------------------------------------------------------------
     */

    /** -------------------------------------
     *  Working with ajax for show the all companies and current company name by input value
     *  -------------------------------------
     */
    public function getCompanies() {

        $indexCompany = $this->company_model->getCompanyByName($_POST['value']);

        if (!$indexCompany) {
            $indexCompany[0]['name'] = $_POST['value'];
        } else {
            $indexCompany = false;
        }

        $this->load->view('private/forGetCompanies', array(
                'companyList' => $this->data['companyList'],
                'indexCompany' => $indexCompany
            )
        );
    }

    /** -------------------------------------
     *  Working with ajax for show info from Company form in Ship To div#ship1
     *  -------------------------------------
     */
    public function showCompanyInfo() {
        $this->load->view('private/forship1', array('info' => $this->input->post()
            )
        );
    }


    /** -------------------------------------
     *  Working with ajax for show Order info
     *  -------------------------------------
     */
    public function reviewOrder() {
        $this->load->view('private/forReview');
    }

    /** -------------------------------------
     *  Working with ajax for show products by input value
     *  -------------------------------------
     */
    public function getProducts() {

        $data = $this->input->post('value');

        $this->load->view('private/forGetProducts', array(
                'productList' => $this->product_model->getProducts($data)
            )
        );
    }

    /** -------------------------------------
     *  Working with ajax for show current product
     *  -------------------------------------
     */
    public function selectProduct() {

        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('productName'),
            'totalDiscount' => 0,
            'totalDiscountType' => 'money',
            'tax' => 0,
            'shippingPrice' => 0,
            'shippingDiscount' => 0,
            'shippingDiscountType' => 'money'

        );

        $this->cart($data);

        $response = $this->input->post();
        $this->load->view('private/forSelectProduct', array(
                'product' => $response
            )
        );
    }
    public function setQty() {
        $this->changeCart('qty', $this->input->post('value'));
    }

    /** -------------------------------------
     *
     *  -------------------------------------
     */
    public function setOtherParams() {

        $this->changeCart('totalDiscount',$this->input->post('totalDiscount'));
        $this->changeCart('totalDiscountType',$this->input->post('totalDiscountType'));
        $this->changeCart('tax',$this->input->post('tax'));
        $this->changeCart('shippingPrice',$this->input->post('shippingPrice'));
        $this->changeCart('shippingDiscount',$this->input->post('shippingDiscount'));
        $this->changeCart('shippingDiscountType',$this->input->post('shippingDiscountType'));

        echo $this->input->post('shippingPrice');
    }

    /** -------------------------------------
     *  Process and validate FORM
     *  -------------------------------------
     */
    public function processingForm() {


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

            foreach($this->input->post() as $key => $value) {
                $this->session->set_userdata($key, $value);
            };

            echo $this->json(array(),'Success', 'SUCCESS');
        } else {
            echo $this->json(array(),'Success', 'ERROR');
        }

    }

    /** -------------------------------------
     *  Create order using cart-info and form-info
     *  -------------------------------------
     */
    public function createOrder() {
        /*MUST FILL THE DATABASE then redirect*/
        /*$this->session->destroy();*/

        $this->cart->destroy();
        session_destroy();
        redirect('index');
    }


    /** -------------------------------------
     *  SET $data parameters for any action
     *  -------------------------------------
     */
    private function __setDataParams() {
        $this->data = array(
            'companyList' => $this->company_model->getCompanyList(),
        );
    }

    /** -------------------------------------
     *  Open Cart and Fill
     *  -------------------------------------
     */
    private function cart($data) {
        $row_id = $this->cart->insert($data);
        $this->session->set_userdata('row_id',$row_id);
    }

    /** -------------------------------------
     *  change Cart
     * @param string
     * @param array
     *  -------------------------------------
     */
    private function changeCart($row,$data) {
        $this->cart->update(array(
                'rowid' => $this->session->userdata('row_id'),
                $row => $data
            )
        );
    }
}