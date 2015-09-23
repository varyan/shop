<?php


class Main_model extends My_Model {

    /** -------------------------------------
     *  Construct
     *  -------------------------------------
     */
    public function __construct () {
        parent::__construct('company');
    }

    /** -------------------------------------
     * @param string b2b / b2c default(b2b)
     *  -------------------------------------
     */
    public function getOrdersByType($type = 'b2b') {
        $this->set_table('order');
        return $this->select('*', array('orderType' => $type) );
    }
}