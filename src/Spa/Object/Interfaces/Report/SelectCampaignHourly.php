<?php 

namespace Spa\Object\Interfaces\Report;



/**
 * Class SelectCampaignHourly
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class SelectCampaignHourly {

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

            'date' => array(
                'name' => 'date',
                'extendType' => 'date',
                'require' => 'yes',
                'type' => 'string',
                'description' => '查询时间',
                'restraint' => '日期格式，如2014-03-01',
                'errormsg' => '查询时间不正确',
                'max_length' => '10',
                'min_length' => '10',
                
                'pattern' => '{date_pattern}',
                
                
                
                
                'name' => 'date',
            );

            'campaign_id_list' => array(
                'name' => 'campaign_id_list',
                'extendType' => 'campaign_id_list',
                'require' => 'no',
                'type' => 'array',
                'description' => '如[2001,2002,2003,2004]，可不填',
                'restraint' => '数量不能不超过200个',
                'errormsg' => '推广计划ID列表不正确',
                
                
                
                
                
                
                
                
                'name' => 'campaign_id_list',
            );

            'group_by' => array(
                'name' => 'group_by',
                'extendType' => 'group_by',
                'require' => 'no',
                'type' => 'array',
                'description' => '聚合参数，例：["date"]',
                'restraint' => '见 [link href="group_by"]聚合规则定义[/link]',
                'errormsg' => '聚合字段不正确',
                
                
                
                
                
                
                
                
                'name' => 'group_by',
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