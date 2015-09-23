<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 18.09.2015
 * Time: 12:25
 */

class Client_Cart extends My_Controller {
    public function __construct(){
        parent::__construct();

        $this->load->model('product_model');
        $this->load->library('cart');
    }


    /** -------------------------------------
     *  Working with ajax for show products by input value
     *  -------------------------------------
     */
    public function get_products() {

        $this->data['productList'] = $this->product_model->get_products($this->input->post('value'));

        $this->load->view('private/for_get_products', array('productList' => $this->data['productList']) );
    }

    /** -------------------------------------
     *  Working with ajax for show current product and add it to cart
     *  -------------------------------------
     */
    public function select_product() {

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

        $this->data['product'] = $this->input->post();
        $this->load->view('private/for_select_product', array('product' => $this->data['product']) );
    }

    /** -------------------------------------
     *  Set Qty
     *  -------------------------------------
     */
    public function set_qty() {
        $this->change_cart('qty', $this->input->post('value'));
    }

    /** -------------------------------------
     *   Change cart params like as tax, totalDiscount...
     *  -------------------------------------
     */
    public function set_other_params() {

        foreach($this->input->post() as $key => $value) {
            $this->change_cart($key,$value);
        };

        echo $this->input->post('shippingPrice');
    }
    /** -------------------------------------
     *  Open Cart and Fill
     * @param array
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
    private function change_cart($row,$data) {
        $this->cart->update(array(
                'rowid' => $this->session->userdata('row_id'),
                $row => $data
            )
        );
    }

    /** -------------------------------------
     *  Delete Product
     *  -------------------------------------
     */
    public function delete_product() {

        $this->cart->update(array(
                'rowid' => $this->input->post('productId'),
                'qty' => 0
            )
        );
    }
}