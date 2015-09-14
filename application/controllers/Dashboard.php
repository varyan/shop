<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 14.09.2015
 * Time: 10:00
 */

class Dashboard extends CI_Controller {


    private $data = [];


    public function __construct() {
        parent::__construct();
        $this->__setDataParams();
        $this->load->database();
    }

    /**
     * @param string (default index)
     *
     */
    public function view($page = 'index') {
        if( !file_exists(VIEWPATH.'admin/pages/'.$page.'.php'))
        {
            show_404();
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/pages/'.$page);
            $this->load->view('admin/footer');
        }
    }



    /**
     *
     *
     */
    public function createNewCompany() {

    }

    /**
     *
     *
     */
    public function getCompanies() {

    }


    /**
     *
     *
     */
    public function newOrder() {
        redirect(base_url('newOrderStep1_view'));
    }

    /**
     *
     *  SET $data parameters for any action
     */
    private function __setDataParams() {
        $this->data = array(
            '' => '',
            ' ' => '',
            '  ' => ''
        );
    }




}