<?php 

namespace Spa\Object\Enum\TargetingAudience;

/**
 * Class SelectEnum
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class SelectEnum {
    
    /**
     * @const advertiser_id 
     */
    const ADVERTISER_ID = 'advertiser_id';

    /**
     * @const audience_type 
     */
    const AUDIENCE_TYPE = 'audience_type';

    /**
     * @const filter 
     */
    const FILTER = 'filter';

    /**
     * @const order_by 
     */
    const ORDER_BY = 'order_by';

    /**
     * @const page 
     */
    const PAGE = 'page';

    /**
     * @const page_size 
     */
    const PAGE_SIZE = 'page_size';

    
    /**
     * Init page_size.
     */
    public function __construct() {
    
    }

}

//end of script