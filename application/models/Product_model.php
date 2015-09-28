<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends My_Model {

    /** -------------------------------------
     *  Create construct and set table
     *  @param string
     *  -------------------------------------
     */
    public function __construct() {
        parent::__construct('products');
    }

    /** -------------------------------------
     *  Get products list using My_model select with like
     *  @return array
     *  -------------------------------------
     */
    public function get_products($data) {
        return $this->select_like('*', array('productName' => $data));
    }

    /** -------------------------------------
     *  Get products list using My_model select with like
     *  @return array
     *  -------------------------------------
     */
    public function get_all_products() {

        $this->set_table('products');
        return $this->select('*');
    }


    /** -------------------------------------
     *
     *  -------------------------------------
     */
    public function insert_product($data) {

        $this->set_table('products');

        $this->insert($data);

        $insert = [
            'productBarcode' => $data['productBarcode'],
            'productCategory' => $data['productCategory'],
            'productContents' => $data['productContents'],
            'productCost' => $data['productContents'],
            'productDescription' => $data['productContents'],
            'productDistributor' => $data['productContents'],
            'productEnableInventory' => $data['productContents'],
            'productQty' => $data['productQty'],
            'productMSRP' => $data['productMSRP'],
            'productName' => $data['productName'],
            'productPosition' => $data['productPosition'],
            'productPrice' => $data['productPrice'],
            'productSkuNumber' => $data['productSkuNumber'],
            'productTaxable' => $data['productTaxable'],
            'productVisibility' => $data['productVisibility'],
            'productWeight' => $data['productWeight'],
        ];
    }

    /** -------------------------------------
     *  @param string
     *  @param array
     *  -------------------------------------
     */
    public function set_product_type($type, $where) {
        $this->set_table('products');
        $this->update(array('productType' => $type), $where);
    }
    /** -------------------------------------
     *
     *  -------------------------------------
     */
    public function upload_image() {
        
        $this->load->library('upload', $config);
    }



}