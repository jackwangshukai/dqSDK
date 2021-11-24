# dqSDK

冬青系统SDK

## 安装

```shell
$ composer require wangshukai/dq-sdk
```

## 使用示例 用户相关

```php
<?php
#使用分配的key和appSecret 网关地址填写测试或者线上地址  示例：https://xxx-api-test.xxx.cn 参数相关请参考冬青接口说明
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
 

```

## 使用示例订单相关

## License

MIT