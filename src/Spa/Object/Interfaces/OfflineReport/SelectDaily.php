<?php 

namespace Spa\Object\Interfaces\OfflineReport;



/**
 * Class SelectDaily
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class SelectDaily {

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

        $this->validateField($params);

        $response = $this->spa->sendRequest($this->method, $this->endpoint, $params, $headers);

        return $response;
    }

    protected function validateField($params) {
        if (empty($params)) {
            return;
        }

        $data = $this->fieldInfo();

        // validate the required field
        $this->validateRequireField($data, $params);

        foreach ($params as $key => $value) {
            if (!isset($data[$key])) {
                continue;
            }

            $type = $data[$key]['type'];
            switch ($type) {
                case 'string':
                    
                    break;

                case 'integer':
                    
                    break;

                case 'id':

                case 'number':
                    
                    break;

                case 'struct':
                    
                    break;

                case 'array':
                    
                    break;

                default: break;
            }
        }
    }

    protected function validateRequireField($data, $params) {
        foreach ($data as $key => $value) {
            if ($value['require'] === 'no') {
                continue;
            }

            var_dump($params[$key]);
            //var_dump($key);
            //var_dump($value);
        }
    }

    public function fieldInfo() {
        return array(

            'task' => array(
                'name' => 'task',
                'extendType' => 'task',
                'require' => 'yes',
                'type' => 'string',
                'description' => '任务',
                'restraint' => '例如：TASK_CLICKDETAILS,详见 [link href="task"]离线任务[/link]',
                'errormsg' => '任务不正确',
                'enum' => 'enum',
                'source' => 'api_task',
            ),

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
            ),

        );
    }

}

//end of script
