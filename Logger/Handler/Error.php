<?php
namespace PF\Core\Logger\Handler;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

/**
 * Custom logger handler for error mode.
 */
class Error extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/wishlist/error.log';

    /**
     * @var int
     */
    protected $loggerType = Logger::ERROR;
}
