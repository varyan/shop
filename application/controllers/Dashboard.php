<?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 14.09.2015
 * Time: 10:00
 */

class Dashboard extends My_Controller {


    private $data = [];


    public function __construct() {
        parent::__construct();
        $this->__setDataParams();
        $this->load->database();
    }

    /** -------------------------------------
     *  @param string (default index)
     *  -------------------------------------
     */
    public function view($page = 'index') {
        if( !file_exists(VIEWPATH.'admin/pages/'.$page.'.php'))
        {
            show_404();
        } else {
            $this->load->view('admin/pages/'.$page);
        }
    }

    /** -------------------------------------
     *  Redirect to newOrder view
     *  -------------------------------------
     */
    public function newOrder() {
        redirect(base_url('newOrder'));
    }


    /** -------------------------------------
     *  Working with ajax for show the all companies
     *  -------------------------------------
     */
    public function getCompanies() {
        /*Get some data from company)model*/
        
        $this->load->view('private/forGetCompanies');
    }





    /** -------------------------------------
     *  SET $data parameters for any action
     *  -------------------------------------
     */
    private function __setDataParams() {
        $this->data = array(
            '' => '',
            ' ' => '',
            '  ' => ''
        );
    }




}