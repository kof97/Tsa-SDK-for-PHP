<?php 

namespace Spa\Object\Interfaces\Creative;



/**
 * Class Read
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class Read {

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

            'advertiser_id' => array(
                'name' => 'advertiser_id',
                'extendType' => 'advertiser_id',
                'require' => 'yes',
                'description' => '广告主ID',
                'restraint' => '详见附录',
                'errormsg' => '广告主ID不正确',
                'name' => 'advertiser_id',
                'name' => 'advertiser_id',
            );

            'creative_id' => array(
                'name' => 'creative_id',
                'extendType' => 'creative_id',
                'require' => 'yes',
                'description' => '广告素材Id',
                'restraint' => '小于2^63',
                'errormsg' => '广告素材Id不正确',
                'name' => 'creative_id',
                'name' => 'creative_id',
            );
;
    }

}

//end of script
