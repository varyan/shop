<?php


class Boxes extends My_Controller {

    /** -------------------------------------
     *  Construct
     *  -------------------------------------
     */
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('boxes_model');
    }

    /** -------------------------------------
     *  Show Boxes
     *  -------------------------------------
     */
    public function show_boxes() {

        $this->data['boxes'] = $this->boxes_model->get_boxes();

        $this->load->view('private/boxes/for_show_boxes', array('boxes' => $this->data['boxes']));
    }

    /** -------------------------------------
     *  Delete Box
     *  -------------------------------------
     */
    public function delete_box() {

        $this->boxes_model->delete_box($this->input->post('boxId'));
    }

    /** -------------------------------------
     *  Add Box
     *  -------------------------------------
     */
    public function add_box() {
        $this->boxes_model->add_box($this->input->post());

        $this->show_boxes();
    }

    /** -------------------------------------
     *  Edit Box
     *  -------------------------------------
     */
    public function edit_box($boxId) {
        $this->boxes_model->edit_box($this->input->post(), $boxId);
        $this->show_boxes();
    }

    /** -------------------------------------
     *  Get Current Box
     *  -------------------------------------
     */
    public function get_current_box() {
        $data = $this->boxes_model->get_current_box($this->input->post("boxId"));

        echo $this->json($data[0]);
    }


}

?>