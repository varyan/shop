<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 17.09.2015
 * Time: 12:27
 */

class My_Form_Validation {

    public function __construct() {
        $this->load->library('form_validation');
    }

    public $rules = array (
        array(
            'field' => 'companyName',
            'label' => 'companyName',
            'rules' => 'required'
        ),
    );

    public function validate() {
        $this->form_validation->set_rules($rules);
        return $this->form_validation->run();
    }


}