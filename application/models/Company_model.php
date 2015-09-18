<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends My_Model {

    /** -------------------------------------
     *  Create construct and set table
     *  @param string
     *  -------------------------------------
     */
    public function __construct() {
        parent::__construct('company');
    }

    /** -------------------------------------
     *  Select All Companies list from DB
     *  -------------------------------------
     */
    public function getCompanyList() {
        return $this->select("id, companyName");
    }

    /** -------------------------------------
     *  Select Index Company from DB
     *  -------------------------------------
     */
    public function getCompanyByName($name) {
        return $this->select("id, companyName", array('companyName' => $name));
    }

    /** -------------------------------------
     *  Select Index Company from DB
     *  -------------------------------------
     */
    public function createNewCompany($data) {
        $this->insert(array(
                'companyName' => $data
            )
        );
    }

}