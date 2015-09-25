<?php


class Boxes_model extends My_Model {

    /** -------------------------------------
     *  Construct
     *  -------------------------------------
     */
    public function __construct () {
        parent::__construct('box');
    }

    /** -------------------------------------
     *  Get all boxes
     * @return array
     *  -------------------------------------
     */
    public function get_boxes() {

        return $this->select('*');
    }

    /** -------------------------------------
     *  Delete Box
     *  @param string
     *  -------------------------------------
     */
    public function delete_box($boxId) {
        $this->delete(array('boxId' => $boxId));
    }

    /** -------------------------------------
     *  Add Box
     *  @param array
     *  -------------------------------------
     */
    public function add_box($data) {
        $this->insert($data);
    }

    /** -------------------------------------
     *  Get CurrentBox
     *  @param string
     *  @return array
     *  -------------------------------------
     */
    public function get_current_box($boxId) {
        return $this->select('*', array('boxId' => $boxId));
    }

    /** -------------------------------------
     *  Get CurrentBox
     *  @param string
     *  @param array
     *  -------------------------------------
     */
    public function edit_box($data, $boxId) {
        $this->update($data, array('boxId' => $boxId));
    }
}