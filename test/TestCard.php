<?php

namespace Dq\Dispatch\test;

use Dq\DqDispatch\Dispatch;
use Dq\DqDispatch\Item;
use PHPUnit\Framework\TestCase;
use Dq\DqDispatch\Card;
use Dq\DqDispatch\Order;
use Dq\DqDispatch\UserServer;

class TestCard extends Testcase
{

    protected $secret = 'xxxxx';

    protected $appKey = 'xxx';

    /**
     * 创建订单
     *
     */
    public function testGetCardInfo()
    {
        $data = [
            'batchNo' => 'XXXX',
        ];
        $dqService = new Dispatch(Card::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://XXXX-api-test.XXXX.cn"]);
        $result = $dqService->getBatchInfo($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testEntity()
    {
        $data = [
            'srcId' => time(),
            'batchNo' => 'xxx',
            'num' => 1,
            'totalAmount' => 1 * 100,
            'realPay' => 1 * 100,
            'freight' => 1 * 100,
            'receive' => [
                'name' => "XX",
                'phone' => "18x013xxxxx",
                'province' => "北京",
                'city' => "北京市",
                'district' => "朝阳区",
                'address' => "xx",
            ]
        ];
        $dqService = new Dispatch(Card::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->postCardEntity($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testExchange()
    {
        $data = [
            'batchNo' => 'XX',
            'cardNo' => 'XXX',
            'cardPwd' => 'XXXX',
            'cycle' => [],//	配送周期频率，周期购类型卡片必填
            'realPay' => 1 * 100,
            'freight' => 1 * 100,
            'receive' => [
                'name' => "XXX",
                'phone' => "XXXXXX",
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
            'batchNo' => 'XX',
            'cardNo' => 'XXX',
            'cardPwd' => 'XXXX',
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
            'tenantId_eq' => 'xxxx',
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
            'orderId' => 'xxxxx',
        ];
        $dqService = new Dispatch(Order::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->orderInfo($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testOrderCancel()
    {
        $data = [
            'orderId' => 'xxxxxx',
        ];
        $dqService = new Dispatch(Order::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->cancelOrder($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testGetUserInfoMobile()
    {
        $data = [
            'mobile' => 'xxxxxxx',
        ];
        $dqService = new Dispatch(UserServer::class, ['debug' => true, 'appKey' => $this->appKey, 'appSecret' => $this->secret, 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->getUserInfoByMobile($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }

    public function testGetBarCode(){
        $data = [
            'barcode' => '8020219981',
            'appId' => '4467157',
        ];
        $dqService = new Dispatch(Item::class, ['debug' => true, 'appKey' => 'xx', 'appSecret' => 'xx', 'gatewayUrl' => "https://holly-api-test.mengniu.cn"]);
        $result = $dqService->storeProductBarcode($data) ?? [];
        $this->assertArrayHasKey('data', $result);
    }
}