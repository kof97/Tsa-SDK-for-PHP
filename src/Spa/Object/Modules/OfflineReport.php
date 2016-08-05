<?php 

namespace Spa\Object\Modules;

use Spa\Exceptions\InterfaceException;
use Spa\Object\Interfaces\OfflineReport\SelectDaily;
use Spa\Object\Interfaces\OfflineReport\SelectHourly;

/**
 * Class OfflineReport
 *
 * @category PHP
 * @package  Spa
 * @author   Arno <arnoliu@tencent.com>
 */
class OfflineReport
{
    
    /**
     * Instance of Spa.
     */
    protected $spa;

    /**
     * Module.
     */
    protected $mod;
    
    /**
     * Init .
     */
    public function __construct($spa, $mod)
    {
        $this->spa = $spa;

        $this->mod = $mod;
    }
    
    /**
     * To get the interface instance.
     *
     * @param string $interface The interface name.
     */
    public function __get($interface)
    {
        switch ($interface) {
            case 'select_daily':
                return new SelectDaily($this->spa, $this->mod, 'select_daily');

            case 'select_hourly':
                return new SelectHourly($this->spa, $this->mod, 'select_hourly');

            default:
                throw new InterfaceException("Could not find the interface of the module called $interface ");
        }
    }
}

//end of script
