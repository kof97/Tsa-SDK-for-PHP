<?php 

namespace Tsa\Object\Enum\Adgroup;

/**
 * Class SelectEnum
 *
 * @category PHP
 * @package  Tsa
 * @author   Arno <arnoliu@tencent.com>
 */
class SelectEnum
{
    
    /**
     * @const advertiser_id 
     */
    const ADVERTISER_ID = 'advertiser_id';

    /**
     * @const filter 
     */
    const FILTER = 'filter';

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
    private function __construct()
    {
        // It should never be invoked.
    }

}

//end of script
