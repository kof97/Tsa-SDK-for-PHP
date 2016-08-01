<?php 

namespace Spa\Object\Interfaces\Agency;



/**
 * Class InnerTransfer
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class InnerTransfer {

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

            'account_type_from' => array(
                'name' => 'account_type_from',
            );

            'account_type_to' => array(
                'name' => 'account_type_to',
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
