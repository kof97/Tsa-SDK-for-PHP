<?php 

namespace Spa\Object\Interfaces\Utility;



/**
 * Class GetTargetingParse
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class GetTargetingParse {

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
                'extendType' => 'advertiser_id',
                'require' => 'yes',
                'type' => 'integer',
                'description' => '广告主ID',
                'restraint' => '详见附录',
                'errormsg' => '广告主ID不正确',
                
                
                
                
                
                
                'max' => '4294967296',
                'min' => '0',
                'name' => 'advertiser_id',
            );

            'targeting_id' => array(
                'name' => 'targeting_id',
                'extendType' => 'targeting_id',
                'require' => 'no',
                'type' => 'id',
                'description' => '定向Id',
                'restraint' => '小于2^63',
                'errormsg' => '定向Id不正确',
                
                
                
                
                
                
                'max' => '9223372036854775807',
                'min' => '1',
                'name' => 'targeting_id',
            );

            'targeting_setting' => array(
                'name' => 'targeting_setting',
                'extendType' => 'targeting.read_targeting_setting',
                'require' => 'no',
                'type' => '',
                
                
                
                
                
                
                
                
                
                
                
                'name' => 'targeting_setting',
            );
;
    }

}

//end of script