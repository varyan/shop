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
     *  Get Box
     *  -------------------------------------
     */
    public function get_box($orderId) {
        $this->set_table('box');
        return $this->join('box.*', 'orderBox', 'box.boxId = orderBox.boxId', array('orderBox.orderId' => $orderId ));
    }

    /** -------------------------------------
     *  Delete Box
     *  -------------------------------------
     */
    public function delete_box($boxId, $orderId) {
        $this->set_table('OrderBox');
        $this->delete(array('boxId' => $boxId, 'orderId' => $orderId));
    }


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