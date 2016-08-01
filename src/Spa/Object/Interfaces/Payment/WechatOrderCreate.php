<?php 

namespace Spa\Object\Interfaces\Payment;



/**
 * Class WechatOrderCreate
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class WechatOrderCreate {

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

            'amount' => array(
                'name' => 'amount',
            );

            'wechat_appid' => array(
                'name' => 'wechat_appid',
            );

            'client_ip' => array(
                'name' => 'client_ip',
            );

            'notify_url' => array(
                'name' => 'notify_url',
            );
;
    }

}

//end of script
