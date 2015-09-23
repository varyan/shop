<?php


class Main extends My_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('main_model');
    }

    /** -------------------------------------
     *  @param string (default index)
     *  -------------------------------------
     */
    public function view($page = 'index') {
        $this->data['content']['title'] = ucfirst($page);
        if( !file_exists(VIEWPATH.'admin/pages/'.$page.'.php'))
        {
            show_404();
        } else {
            $this->data['content']['page'] = $page;
            $this->load->view('admin/includes/content',$this->data['content']);
        }
    }

    /**
     * -------------------------------------
     * Functions AJAX
     * -------------------------------------
     */

    /**
     * -------------------------------------
     * show orders in index page for b2b or b2c
     * @param string (b2b / b2c)
     * -------------------------------------
     */

    public function show_orders($type){

        $this->data['orders'] = $this->main_model->getOrdersByType($type);

        if ($type == 'b2c') {

            $this->load->view('private/order/for_show_orders_b2c', array('orders' => $this->data['orders']));
        } else {
            $this->load->view('private/order/for_show_orders_b2b');
        }
    }



}