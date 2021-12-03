<?php

namespace Dq\Dispatch\test;

use Dq\DqDispatch\DqSdk;
use PHPUnit\Framework\TestCase;

class TestSdk extends Testcase
{

    /**
     * 创建订单
     *
     */
    public function testSdk()
    {
        $config = ['appKey' => 'XX', 'appSecret' => 'XX', 'gatewayUrl' => "XX"];
        $dQSdk = new DqSdk($config);
        $user = $dQSdk->user;//用户相关
        $order = $dQSdk->order;//订单相关
        $address = $dQSdk->address;//用户地址相关
        $card = $dQSdk->card;//卡相关
        $item = $dQSdk->item;//线下门店相关
        $data = [
            'mobile' => '18X0XXXXXXX',
        ];
        $res=$user->getUserInfoByMobile($data);//查询用户信息
        $res=$item->allStore(['current'=>1,'size'=>10,'updateTime_ge'=>1637747886149]);//查询用户信息

    }
}