<?php 

namespace Spa\Object\Interfaces\Agency;



/**
 * Class GetAllTransactionDetail
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class GetAllTransactionDetail {

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

        $this->method = 'GET';

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

            'account_type' => array(
                'name' => 'account_type',
            );

            'date_range' => array(
                'name' => 'date_range',
            );

            'page' => array(
                'name' => 'page',
            );

            'page_size' => array(
                'name' => 'page_size',
            );

            'no_page' => array(
                'name' => 'no_page',
            );
;
    }

}

//end of script
