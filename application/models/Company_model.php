<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 14.09.2015
 * Time: 22:16
 */

class Company_model extends My_Model {

    /** -------------------------------------
     *  Working with this table
     *  -------------------------------------
     */
    private $_table = false;


    /** -------------------------------------
     *  Create construct and set table
     *  @param string
     *  -------------------------------------
     */
    public function __construct($table = 'company') {
        parent::__construct();
        $this->setTable($table);
    }

    public function getCompanyByName() {

    }

    /** -------------------------------------
     *  @param string
     *  -------------------------------------
     */
    public function setTable() {
        $this->_table = $table;
    }

}