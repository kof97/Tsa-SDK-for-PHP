<?php 

namespace Spa\Object\Interfaces\Auth;



/**
 * Class PtloginToken
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class PtloginToken {

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

            'app_id' => array(
                'name' => 'app_id',
                'extendType' => 'app_id',
                'require' => 'yes',
                'description' => '合作方APP ID',
                'restraint' => '小于32字符',
                'errormsg' => '合作方APP ID不正确',
                'name' => 'app_id',
                'name' => 'app_id',
            );

            'app_key' => array(
                'name' => 'app_key',
                'extendType' => 'app_key',
                'require' => 'yes',
                'description' => '密钥APP KEY',
                'restraint' => '小于32字符',
                'errormsg' => '密钥APP KEY不正确',
                'name' => 'app_key',
                'name' => 'app_key',
            );

            'qq' => array(
                'name' => 'qq',
                'extendType' => 'qq',
                'require' => 'yes',
                'description' => '登录QQ号码',
                'restraint' => '小于2^63',
                'errormsg' => '登录QQ号码不正确',
                'name' => 'qq',
                'name' => 'qq',
            );

            'skey' => array(
                'name' => 'skey',
                'extendType' => 'skey',
                'require' => 'yes',
                'description' => '密钥APP KEY',
                'restraint' => '小于64字符',
                'errormsg' => 'skey不正确',
                'name' => 'skey',
                'name' => 'skey',
            );

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
;
    }

}

//end of script
