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
            );

            'date' => array(
                'name' => 'date',
            );

            'campaign_id_list' => array(
                'name' => 'campaign_id_list',
            );

            'group_by' => array(
                'name' => 'group_by',
            );

            'page' => array(
                'name' => 'page',
            );

            'page_size' => array(
                'name' => 'page_size',
            );
;
    }

}

//end of script
