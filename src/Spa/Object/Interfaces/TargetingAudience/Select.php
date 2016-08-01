<?php 

namespace Spa\Object\Interfaces\TargetingAudience;



/**
 * Class Select
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class Select {

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
                'type' => 'integer',
                'description' => '广告主ID',
                'restraint' => '详见附录',
                'errormsg' => '广告主ID不正确',
                
                
                
                
                
                
                'max' => '4294967296',
                'min' => '0',
                'name' => 'advertiser_id',
            );

            'audience_type' => array(
                'name' => 'audience_type',
                'extendType' => 'audience_type',
                'require' => 'yes',
                'type' => 'string',
                'description' => '人群类型，如：Meta、Combine、Lookalike',
                'restraint' => '详见 [link href="audience_type"]人群类型[/link]',
                'errormsg' => '人群类型不正确',
                
                
                
                
                'enum' => 'enum',
                'source' => 'api_audience_type',
                
                
                'name' => 'audience_type',
            );

            'filter' => array(
                'name' => 'filter',
                'extendType' => 'filter',
                'require' => 'no',
                'type' => 'array',
                'description' => '若此字段不传，或传空则视为无限制条件。参见：高级条件',
                'restraint' => '过滤条件结构',
                'errormsg' => '过滤条件不正确',
                
                
                
                
                
                
                
                
                'name' => 'filter',
            );

            'order_by' => array(
                'name' => 'order_by',
                'extendType' => 'order_by',
                'require' => 'no',
                'type' => 'struct',
                'description' => '排序规则',
                'restraint' => '当前支持根据audience_id或user_count排序',
                'errormsg' => '排序参数不正确',
                
                
                
                
                
                
                
                
                'name' => 'order_by',
            );

            'page' => array(
                'name' => 'page',
                'extendType' => 'page',
                'require' => 'no',
                'type' => 'integer',
                'description' => '搜索页码',
                'restraint' => '大于等于1，若不传则视为1',
                'errormsg' => '页码不正确',
                
                
                
                
                
                
                'max' => '99999',
                'min' => '1',
                'name' => 'page',
            );

            'page_size' => array(
                'name' => 'page_size',
                'extendType' => 'page_size',
                'require' => 'no',
                'type' => 'integer',
                'description' => '一页显示的数据条数',
                'restraint' => '大于等于1，且小于100，若不传则视为10',
                'errormsg' => '每页显示条数不正确',
                
                
                
                
                
                
                'max' => '100',
                'min' => '1',
                'name' => 'page_size',
            );
;
    }

}

//end of script