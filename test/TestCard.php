<?php

namespace Dq\Dispatch\test;

use Dq\DqDispatch\Dispatch;
use PHPUnit\Framework\TestCase;
use Dq\DqDispatch\Card;
use Dq\DqDispatch\Order;
use Dq\DqDispatch\UserServer;

class TestCard extends Testcase
{

    protected $secret = 'vBTqzIqGSbX5YKa4mUZIp%5%2mgJEOmHilnw!wHAiZYz1Iq&BjSEIAvu0z&&fvdo';

    protected $appKey = 'c1bd14579d9cd51910360832bcd3454b';

    /**
     * 创建订单
     *
     */
    public function testGetCardInfo()
    {
        $data = [
            'batchNo' => '1096527',
        ];
        $dqService = new Dispatch(Card::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->getBatchInfo($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testEntity()
    {
        $data = [
            'srcId' => time(),
            'batchNo' => '1096527',
            'num' => 1,
            'totalAmount' => 1 * 100,
            'realPay' => 1 * 100,
            'freight' => 1 * 100,
            'receive' => [
                'name' => "汪书凯",
                'phone' => "18501369837",
                'province' => "北京",
                'city' => "北京市",
                'district' => "朝阳区",
                'address' => "东坝",
            ]
        ];
        $dqService = new Dispatch(Card::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->postCardEntity($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testExchange()
    {
        $data = [
            'batchNo' => '1096527',
            'cardNo' => '1096527000001',
            'cardPwd' => 'MNCN-DW5R-KPER-FZRY',
            'cycle' => [],//	配送周期频率，周期购类型卡片必填
            'realPay' => 1 * 100,
            'freight' => 1 * 100,
            'receive' => [
                'name' => "汪书凯",
                'phone' => "18501369837",
                'province' => "北京",
                'city' => "北京市",
                'district' => "朝阳区",
                'address' => "东坝",
            ]
        ];
        $dqService = new Dispatch(Card::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->postCardEntity($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testCardQuery()
    {
        $data = [
            'batchNo' => '1096527',
            'cardNo' => '1096527000001',
            'cardPwd' => 'MNCN-DW5R-KPER-FZRY',
        ];
        $dqService = new Dispatch(Card::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->queryCardInfo($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testQueryProduct()
    {
        $data = [
            'current' => 1,
            'size' => 100,
            'tenantId_eq' => 041735,
        ];
        $dqService = new Dispatch(Card::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->queryCardGoods($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testTake()
    {
        $data = [
            'batchNo' => 1096528,
            'srcId' => time(),
        ];
        $dqService = new Dispatch(Card::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->take($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    //CE09920211103191844299477415
    public function testOrderInfo()
    {
        $data = [
            'orderId' => 'CE09920211103191844299477415',
        ];
        $dqService = new Dispatch(Order::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->orderInfo($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testOrderCancel()
    {
        $data = [
            'orderId' => 'CE09920211103191844299477415',
        ];
        $dqService = new Dispatch(Order::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->cancelOrder($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testGetUserInfoMobile()
    {
        $data = [
            'mobile' => '18501369837',
        ];
        $dqService = new Dispatch(UserServer::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->getUserInfoByMobile($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }
}