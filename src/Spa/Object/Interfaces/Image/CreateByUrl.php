<?php 

namespace Spa\Object\Interfaces\Image;



/**
 * Class CreateByUrl
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class CreateByUrl {

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
            ),

            'image_url' => array(
                'name' => 'image_url',
                'extendType' => 'image_url',
                'require' => 'yes',
                'type' => 'string',
                'description' => '图片地址',
                'errormsg' => '图片地址不正确',
                'max_length' => '1024',
                'min_length' => '1',
                'pattern' => '{url_pattern}',
            ),

            'outer_image_id' => array(
                'name' => 'outer_image_id',
                'extendType' => 'outer_image_id',
                'require' => 'no',
                'type' => 'string',
                'description' => '外部图片id',
                'restraint' => '1024字符内',
                'errormsg' => '外部图片id不正确',
                'max_length' => '1024',
                'min_length' => '1',
            ),

        );
    }

}

//end of script
