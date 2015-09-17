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
        /* $this->cart->destroy();
         $this->session->start();
         $this->session->destroy();*/
    }


    /** -------------------------------------
     *  @param string (default index)
     *  -------------------------------------
     */
    public function view($page = 'index') {
        if( !file_exists(VIEWPATH.'admin/pages/'.$page.'.php'))
        {
            show_404();
        } else {
            $this->load->view('admin/pages/'.$page);
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
     * @param string
     *  -------------------------------------
     */
    public function createCompany($data) {

        $this->company_model->createNewCompany($data);

        if (!$this->session->companyId) {
            $this->session->set_userdata('companyId',NULL);
        }

        $this->session->companyId = $this->db->insert_id();

        redirect('CompanyPage');

    }

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
        /*AT first must validate form params then set all of them in session*/

        $this->load->library('My_Form_Validation');
        exit;
        if ($this->My_Validator->validate( $this->input->post() ) ) {

            foreach($this->input->post() as $key => $value) {
                $this->session->set_userdata($key, $value);
            };

            echo $this->json(array(),'Success', 'The form has been validate');


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