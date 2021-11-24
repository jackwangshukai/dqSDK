<?php

namespace Dq\DqDispatch;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{

    public function register(Container $pimple)
    {
        // 订单接口
        $pimple['order'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new Order($config);
        };

        //卡接口
        $pimple['card'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new Card($config);
        };

        //用户接口
        $pimple['user'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new UserServer($config);
        };

        // 用户收货地址
        $pimple['address'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new UserAddress($config);
        };

        // 线下门店相关
        $pimple['item'] = function ($pimple) {
            $config = $pimple->getConfig();
            return new Item($config);
        };
    }
}