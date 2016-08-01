<?php 

namespace Spa\Object\Interfaces\Product;



/**
 * Class Create
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class Create {

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
                'description' => '广告主ID',
                'restraint' => '详见附录',
                'errormsg' => '广告主ID不正确',
                'name' => 'advertiser_id',
                'name' => 'advertiser_id',
            );

            'product_refs_id' => array(
                'name' => 'product_refs_id',
                'extendType' => 'product_refs_id',
                'require' => 'yes',
                'description' => '标的物Id',
                'restraint' => '小于128个英文字符',
                'errormsg' => '标的物Id不正确',
                'name' => 'product_refs_id',
                'name' => 'product_refs_id',
            );

            'product_name' => array(
                'name' => 'product_name',
                'extendType' => 'product_name',
                'require' => 'yes',
                'description' => '标的物名称',
                'restraint' => '小于255个英文字符',
                'errormsg' => '标的物名称不正确',
                'name' => 'product_name',
                'name' => 'product_name',
            );

            'product_type' => array(
                'name' => 'product_type',
                'extendType' => 'product_type',
                'require' => 'yes',
                'description' => '标的物类型',
                'restraint' => '详见 [link href='product_type']标的物类型[/link]',
                'errormsg' => '标的物类型不正确',
                'name' => 'product_type',
                'name' => 'product_type',
            );

            'product_info' => array(
                'name' => 'product_info',
                'extendType' => 'product_info',
                'require' => 'no',
                'description' => '标的物详细信息',
                'restraint' => '详见 [link href='ec_info']京东、拍拍店铺、标的物[/link]',
                'errormsg' => '京东购物行为不正确',
                'name' => 'product_info',
                'name' => 'product_info',
            );
;
    }

}

//end of script
