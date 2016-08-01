<?php 

namespace Spa\Object\Interfaces\Account;



/**
 * Class GetDailyInvoice
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class GetDailyInvoice {

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

            'account_type' => array(
                'name' => 'account_type',
                'extendType' => 'account_type',
                'require' => 'yes',
                'description' => '账户类型',
                'restraint' => '见 [link href='account_type_map']账户类型定义[/link]',
                'errormsg' => '账户类型不正确',
                'name' => 'account_type',
                'name' => 'account_type',
            );

            'trade_type' => array(
                'name' => 'trade_type',
                'extendType' => 'trade_type',
                'require' => 'no',
                'description' => '交易类型',
                'restraint' => '见 [link href='trade_type']交易类型[/link]',
                'errormsg' => '交易类型不正确',
                'name' => 'trade_type',
                'name' => 'trade_type',
            );

            'date_range' => array(
                'name' => 'date_range',
                'extendType' => 'date_range',
                'require' => 'yes',
                'description' => '时间范围',
                'restraint' => '日期格式，{"start_date":"2014-03-01","end_date":"2014-04-02"}',
                'errormsg' => '时间范围不正确',
                'name' => 'date_range',
                'name' => 'date_range',
            );

            'page' => array(
                'name' => 'page',
                'extendType' => 'page',
                'require' => 'no',
                'description' => '搜索页码',
                'restraint' => '大于等于1，若不传则视为1',
                'errormsg' => '页码不正确',
                'name' => 'page',
                'name' => 'page',
            );

            'page_size' => array(
                'name' => 'page_size',
                'extendType' => 'page_size',
                'require' => 'no',
                'description' => '一页显示的数据条数',
                'restraint' => '大于等于1，且小于100，若不传则视为10',
                'errormsg' => '每页显示条数不正确',
                'name' => 'page_size',
                'name' => 'page_size',
            );
;
    }

}

//end of script
