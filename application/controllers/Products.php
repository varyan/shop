<?php


class Products extends My_Controller {

    /** -------------------------------------
     *  Construct
     *  -------------------------------------
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('product_model');
    }

    /** -------------------------------------
     *
     *  -------------------------------------
     */
    public function get_all_products() {

        $this->data['all_products'] = $this->product_model->get_all_products();

        $this->load->view('private/products/for_show_all_products', array('products' => $this->data['all_products']));
    }

    /** -------------------------------------
     *
     *  -------------------------------------
     */
    public function add_product() {
        $this->load->view('private/products/for_add_product');
    }

    /** -------------------------------------
     *
     *  -------------------------------------
     */
    public function add_product1() {
        $this->session->set_userdata('product_type', $this->input->post('type'));
        $this->load->view("private/products/".$this->input->post('type'));
    }

    /** -------------------------------------
     *
     *  -------------------------------------
     */
    public function add_product2() {
        $this->product_model->insert_product($this->input->post());
        $last_id = $this->db->insert_id();
        $this->product_model->set_product_type($this->session->product_type, array('productId' => $last_id));

        if (!empty($_FILES['productImage'])) {
            $this->product_model->upload_image();
        }
        /* Product Type, Image arandzin */
        /*INSERT IMAGE IN IMAGES, get name, then insert name in productImage for this product*/
    }

    /** -------------------------------------
     *
     *  -------------------------------------
     */
    public function edit_product() {}


}

?>