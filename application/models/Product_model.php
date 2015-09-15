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
     *  -------------------------------------
     */
    public function getProducts($data) {
        return $this->selectLike('*', array(
                'productName' => $data
            )
        );

    }

}