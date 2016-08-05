<?php 

namespace Spa\Object\Interfaces\\$mod_class;

use Spa\Object\Detector\FieldsDetector;

/**
 * Class $interface_class
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class $interface_class {

    /**
     * Instance of Spa.
     */
    protected \$spa;

    /**
     * HTTP method.
     */
    protected \$method;

    /**
     * The request endpoint.
     */
    protected \$endpoint;

    /**
     * Init .
     */
    public function __construct(\$spa, \$mod, \$act) {

        \$this->spa = \$spa;

        \$this->method = '$method';

        \$this->endpoint = \$mod . '/' . \$act;

    }

    /**
     * Send a request.
     *
     * @param array \$params  The request params.
     * @param array \$headers The request headers.
     * @return Response
     */
    public function send(\$params = array(), \$headers = array(), \$access_token = null) {

        \$data = \$this->fieldInfo();

        FieldsDetector::validateField(\$params, \$data);

        \$response = \$this->spa->sendRequest(\$this->method, \$this->endpoint, \$params, \$headers, \$access_token);

        return \$response;
    }

    /**
     * The fields info.
     */
    public function fieldInfo() {
        return $field_info
    }

}

//end of script
