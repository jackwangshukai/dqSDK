<?php

namespace Dq\DqDispatch;

use Hanson\Foundation\Foundation;

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