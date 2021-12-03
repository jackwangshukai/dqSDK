<?php

namespace Dq\DqDispatch;

use Hanson\Foundation\Foundation;
/**
 * @property Order $order
 * @property Card $card
 * @property UserServer $user
 * @property UserAddress $address
 * @property item $item
 *
 * Class dq
 * @package wangshukai/dq-sdk
 */
class DqSdk extends Foundation
{
    protected $providers = [
        ServiceProvider::class
    ];

    public function __construct($config)
    {
        $config['debug'] = $config['debug'] ?? false;
        parent::__construct($config);
    }

}