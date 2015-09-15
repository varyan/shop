<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {


    private $data = [];


    public function __construct() {
        parent::__construct();
        $this->load->model('company_model');
        $this->load->model('product_model');
        $this->__setDataParams();
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
     *  Redirect to newOrder view
     *  -------------------------------------
     */
    public function newOrder() {
        redirect(base_url('newOrder'));
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
     *  Create new Company and redirect to it's page
     * @param string
     *  -------------------------------------
     */
    public function createCompany($data) {

        $this->company_model->createNewCompany($data);

        $this->session->set_userdata(
            array(
                 'companyId' => $this->db->insert_id()
            )
        );

        redirect('CompanyPage');

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
    public function showProductInfo() {

        print_r($this->input->post());

        /*$this->load->view('private/forSelectProduct', array(
                'product' => $data
            )
        );*/
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
     *  SET $data parameters for any action
     * @param string
     * @parem string
     *  -------------------------------------
     */
    private function __setUniqueDataParam($key, $value) {

    }




}