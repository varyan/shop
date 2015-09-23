<?php


class Order_model extends My_Model {

    /** -------------------------------------
     *  Construct
     *  -------------------------------------
     */
    public function __construct () {
        parent::__construct('order');
    }


    /** -------------------------------------
     *  AJAX FUNCTIONS
     *  -------------------------------------
     */


    /** -------------------------------------
     *  get ship info
     *  -------------------------------------
     */
    public function get_ship_info($id) {
        $this->db->select('*');
        $this->db->from('ship');
        $this->db->join('order', "order.shipId = ship.shipId");
        $this->db->where('orderId', $id);

        $query = $this->db->get();

        return $query->result_array();
    }


}