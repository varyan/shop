<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 14.09.2015
 * Time: 22:27
 */

class My_Model extends CI_Model {

    /** -------------------------------------
     *  Working with this table
     *  -------------------------------------
     */
    protected $_table = '';

    public function __construct($table = false) {
        parent::__construct();

        if($table) {
            $this->_table = $table;
            $this->set_table($table);
        }

        $this->load->database();
    }


    /** -------------------------------------
     *  @param array
     *  @return boolean
     *  -------------------------------------
     */
    protected function insert($data) {

        $this->db->insert($this->_table, $data);
        $effectedRow = $this->db->affected_rows();
        if(!$effectedRow) {
            return true;
        }
        return false;
    }


    /** -------------------------------------
     *  @param array
     *  @param array
     *  @return true / false
     * --------------------------------------
     */
    protected function update($data, $where) {

        $this->db->where($where);
        $this->db->update($this->_table, $data);

        $effectedRow = $this->db->affected_rows();
        if(!$effectedRow) {
            return true;
        }
        return false;
    }


    /** -------------------------------------
     *  @param array (default empty array)
     *  @return boolean
     * -------------------------------------
     */
    protected function delete($where = false) {

        if($where) {
            $this->db->where($where);
        }

        $this->db->delete($this->_table);


        $affectedRow = $this->db->affected_rows();
        if(!$affectedRow) {
            return true;
        }
        return false;

    }


    /** -------------------------------------
     *  @param string
     *  @param array (default false)
     *  @param string (default false)
     *  @param number (default false)
     *  @return array
     *  -------------------------------------
     */
    protected function select($fields ="*", $where = false, $order = false, $limit = false) {

        $this->db->select($fields);
        $this->db->from($this->_table);

        if($where) {
            $this->db->where($where);
        }


        if($order) {
            $this->db->order_by($order['by'], $order['type']);
        }
        if($limit) {
            $this->db->limit($limit);
        }

        $query = $this->db->get();

        if ($query -> num_rows() > 0) {
            return $query->result_array();
        }
        return false;

    }

    /** -------------------------------------
     *  @param array
     *  @return array
     *  -------------------------------------
     */
    protected function select_join($data) {

        $fields = '';

        foreach($data['tables'] as $table) {
            $fields = ','.$table['fields'];
        }

        $this->db->select("$this->_table.* $fields ");
        $this->db->from($this->_table);

        foreach($data['tables'] as $table) {
            $this->db->join($table["name"], "$this->_table.".$table['ON']);
        }

        $this->db->where($data['where']);

        $query = $this->db->get();

        return $query->result_array();

    }

    /** -------------------------------------
     *  @param string
     *  @param array (default false)
     *  @return array
     *  -------------------------------------
     */
    protected function select_like($fields = "*", $like = false) {


        $this->db->select($fields);
        $this->db->from($this->_table);

        if($like) {
            $this->db->like($like);
        }

        $query = $this->db->get();

        if ($query -> num_rows() > 0) {
            return $query->result_array();
        }
        return false;

    }



    /** -------------------------------------
     *  @param string
     *  -------------------------------------
     */
    protected function set_table($table) {
        $this->_table = $table;
    }

    /** -------------------------------------
     *  @param string
     *  @param string
     *  @param string
     *  @param array
     *  @return array
     */
    protected function join($row, $table, $on, $where = false) {
        $this->db->select($row);
        $this->db->from($this->_table);
        $this->db->join($table, $on);

        if ($where) {
            $this->db->where($where);
        }

        $response = $this->db->get();


        return $response->result_array();
    }

}