<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_model extends My_Model {

    /** -------------------------------------
     *  Create construct and set table
     *  @param string
     *  -------------------------------------
     */
    public function __construct() {
        parent::__construct('company');
    }

    /** -------------------------------------
     *  Select All Companies list from DB
     *  -------------------------------------
     */
    public function get_company_list() {
        return $this->select("companyId, companyName");
    }

    /** -------------------------------------
     *  Select Index Company from DB
     *  -------------------------------------
     */
    public function get_company_by_name($name) {
        return $this->select("companyId, companyName", array('companyName' => $name));
    }

    /** -------------------------------------
     *  Select Index Company from DB
     *  -------------------------------------
     */
    public function create_new_company($data) {
        $this->insert( array(
                'companyName' => $data
            )
        );
    }


    /** -------------------------------------
     *  Create Order
     * @param array
     *  -------------------------------------
     */
    public function create_order($data) {

        $table_rows_id = [];

        $insert = array(
            "companyName" => $data['companyName'],
            "companyPhone" => $data['companyPhone'],
            "companyExt"=> $data['companyExt'],
            "companyFax" => $data['companyFax'],
            "companyCustomer"=> $data['companyCustomer'],
            "companyNotes" => $data['companyNotes'],
            "companyAdminNotes"=> $data['companyAdminNotes']
        );
        $this->set_table('company');
        $this->update($insert, array('companyName' => $data['companyName']));
        $companyid = $this->select('companyId', array('companyName' => $data['companyName']));

        foreach($companyid as $row) {
            $table_rows_id['companyId'] = $row['companyId'];
        };



        $insert = array(
            "companyId"=> $table_rows_id['companyId'],
            "contactFname"=> $data['contactFname'],
            "contactLname" => $data['contactLname'],
            "contactEmail"=> $data['contactEmail'],
            "contactTitle" => $data['contactTitle'],
            "contactPhone"=> $data['contactPhone'],
            "contactExt" => $data['contactExt'],
            "contactPrimary" => $data['contactPrimary'],
            "contactPayable" => $data['contactPayable']
        );
        $this->set_table('contact');
        $this->insert($insert);
        $table_rows_id['contactId'] = $this->db->insert_id();


        $insert = array(
            "companyId"=> $table_rows_id['companyId'],
            "shipAddress1" => $data['shipAddress1'],
            "shipAddress2"  => $data['shipAddress2'],
            "shipCity" => $data['shipCity'],
            "shipState"  => $data['shipState'],
            "shipZip" => $data['shipZip'],
            "shipCountry"  => $data['shipCountry'],
            "shipingCenter"=> $data['shipingCenter'],
            "shippingType" => $data['shippingType'],
            "shipingStartDate"=> $data['shipingStartDate'],
            "shipingEndDate" => $data['shipingEndDate'],
            "shipCompanyName" => $data['shipCompanyName'],
            "shipContactName" => $data['shipContactName'],
            "shipCompanyPhone" => $data['shipCompanyPhone'],
            "shipEmail" => $data['shipEmail'],
        );
        $this->set_table('ship');
        $this->insert($insert);
        $table_rows_id['shipId'] = $this->db->insert_id();


        $insert = array(
            "companyId" => $table_rows_id['companyId'],
            "billingPONumber" => $data['billingPONumber'],
            "billingPaymentTerms"  => $data['billingPaymentTerms'],
            "billingPermentType" => $data['billingPermentType'],
        );
        $this->set_table('bill');
        $this->insert($insert);
        $table_rows_id['billingId'] = $this->db->insert_id();


        $insert = array(
            "companyId" => $table_rows_id['companyId'],
            "paymentNameOnCard" => $data['paymentNameOnCard'],
            "paymentCardName" => $data['paymentCardName'],
            "paymentSecurityCode" => $data['paymentSecurityCode'],
            "paymentBillingAddress"  => $data['paymentBillingAddress'],
            "paymentCity" => $data['paymentCity'],
            "paymentState"  => $data['paymentState'],
            "paymentZip" => $data['paymentZip'],
            "paymentExpDate"  => $data['paymentExpDate'],
            "paymentDefaultCard" => $data['paymentDefaultCard'],
        );
        $this->set_table('payment');
        $this->insert($insert);
        $table_rows_id['paymentId'] = $this->db->insert_id();


        $insert = array(
            "additionalSafesRep" => $data['additionaSafesRep'],
            "additionalPaymentTerms"  => $data['additionalPaymentTerms'],
            "additionalPaymentType" => $data['additionalPaymentType'],
            "additionalSalesTax"  => $data['additionalSalesTax'],
            "additionalProfileId" => $data['additionalProfileId'],
            "additionalB2BorB2C"  => $data['additionalB2BorB2C'],
            "additionalLeadSource" => $data['additionalLeadSource'],
            "additionalResellerNumber"  => $data['additionalResellerNumber'],
            'companyId' => $table_rows_id['companyId'],
            'additionalCreationDate' => date('j-n-Y-H:s', time())
        );
        $this->set_table('additional');
        $this->insert($insert);
        $table_rows_id['additionalId'] = $this->db->insert_id();


        $this->set_table('order');
        unset($table_rows_id['contactId']);
        $insert = array();
        foreach($table_rows_id as $key => $value) {
            $insert[$key] = $value;
        };
        $insert['orderDate'] = time();
        $insert['orderType'] = $data['additionalB2BorB2C'];
        $this->insert($insert);
        $table_rows_id['orderId'] = $this->db->insert_id();


        $this->set_table('selectedProducts');
        foreach($this->cart->contents() as $items) {
            $insert = array();
            foreach($items as $key => $value) {
                $insert[$key] = $value;
            }
            $insert['orderId'] = $table_rows_id['orderId'];
            $insert['companyId'] = $table_rows_id['companyId'];
            $this->insert($insert);
        }
     }
}















