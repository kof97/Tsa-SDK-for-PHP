<?php 

namespace Spa\Object\Interfaces\Agency;



/**
 * Class TransferBack
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class TransferBack {

    /**
     * Instance of Spa.
     */
    protected $spa;

    /**
     * HTTP method.
     */
    protected $method;

    /**
     * The request endpoint.
     */
    protected $endpoint;

    protected $name;

    protected $title;


    /**
     * Init .
     */
    public function __construct($spa, $mod, $act) {

        $this->spa = $spa;

        $this->method = 'POST';

        $this->endpoint = $mod . '/' . $act;

    }

    public function send($params = array(), $headers = array()) {

        $response = $spa->sendRequest($this->method, $this->endpoint, $params, $headers);

        return $response;
    }

    protected function validateField() {

    }

    protected function fieldInfo() {
        
        array(

            'advertiser_id' => array(
                'name' => 'advertiser_id',
            );

            'account_type' => array(
                'name' => 'account_type',
            );

            'outer_advertiser_id' => array(
                'name' => 'outer_advertiser_id',
            );

            'amount' => array(
                'name' => 'amount',
            );

            'external_bill_no' => array(
                'name' => 'external_bill_no',
            );

            'memo' => array(
                'name' => 'memo',
            );
;
    }

}

//end of script
