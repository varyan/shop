<?php


class Customer_model extends My_Model {

    /** -------------------------------------
     *  Construct
     *  -------------------------------------
     */
    public function __construct () {
        parent::__construct('order');
    }

    /** -------------------------------------
     *  Select info about company and ... from tables
     *  @param string (order_id)
     *  @return array
     *  -------------------------------------
     */
    public function get_customer_info($order_id) {
        $result = [];

        $companyId = $this->select('companyId', array('orderId' => $order_id));

        $this->set_table('company');
        $result['info']['companyInfo'] = $this->select('companyName, companyPhone, companyFax, companyCustomer, companyNotes, companyAdminNotes', array (
                'companyId' => $companyId[0]['companyId']
            )
        );

        $this->set_table('additional');
        $result['info']['additionalInfo'] = $this->select('*', array (
                'companyId' => $companyId[0]['companyId']
            )
        );

        $this->set_table('contact');
        $result['contactInfo'] = $this->select('companyId, contactFname, contactLname, contactEmail, contactPayable',array (
                'companyId' => $companyId[0]['companyId']
            )
        );

        $this->set_table('order');
        $result['orderInfo'] = $this->select('*', array('companyId' => $companyId[0]['companyId']
            )
        );

        return $result;
    }

    /** -------------------------------------
     *  Select Info for Customer
     *  -------------------------------------
     */
    public function get_customers($companyId) {
        $result = [];

        $this->set_table('company');
        $result['info']['companyInfo'] = $this->select('companyName, companyPhone, companyFax, companyCustomer, companyNotes, companyAdminNotes', array (
                'companyId' => $companyId
            )
        );

        $this->set_table('additional');
        $result['info']['additionalInfo'] = $this->select('*', array (
                'companyId' => $companyId
            )
        );

        $this->set_table('contact');
        $result['contactInfo'] = $this->select('companyId, contactFname, contactLname, contactEmail, contactPayable',array (
                'companyId' => $companyId
            )
        );

        $this->set_table('order');
        $result['orderInfo'] = $this->select('*', array(
                'companyId' => $companyId
            )
        );

        return $result;
    }

    /** -------------------------------------
     * @param string (default all)
     *  -------------------------------------
     * @return array|null
     */
    public function get_customers_by_type($type = 'all') {
        $this->set_table('company');
        if ($type == 'all') {

            return $this->select('*');

        } elseif ($type == 'b2c') {

            return $this->join('*', 'additional', 'additional.companyId = company.companyId', array('additional.additionalB2BorB2C' => 'b2c'));

        } elseif ($type == 'b2b') {
            return $this->join('*', 'additional', 'additional.companyId = company.companyId', array('additional.additionalB2BorB2C' => 'b2B'));
        } else {
            return null;
        }

    }
}