<?php

namespace Dq\DqDispatch;

use Dq\DqDispatch\Card;
use Hanson\Foundation\Foundation;

/**
 * Class Dispatch
 *
 * @method array getBatchInfo($params) 根据批次号查询批次信息接口
 * @method array postCardEntity($params) 实体卡接口
 * @method array queryCardInfo($params)查询卡信息接口
 * @method array exchange($params)兑换卡接口
 * @method array queryCardGoods($params)查询租户下所有商品接口
 * @method array take($params)电子卡领取接口
 * @method array cancelOrder($params)取消订单
 * @method array orderCards($params)查询卡订单详细卡号
 * @method array orderCycle($params)查询订单配送周期
 * @method array entityOrder($params)创建实物订单
 * @method array orderFinish($params)订单收货
 * @method array orderInfo($params)查询订单信息
 * @method array orderPause($params)暂停周期购订单
 * @method array orderRelation($params)查询关联单号
 * @method array orderRestore($params)恢复周期购订单
 * @method array orderSingleStatus($params)查询单个订单状态
 * @method array orderBatchStatus($params)查询多个订单状态
 * @method array orderTracking($params)查询订单物流信息
 * @method array addressByUser($params)查询用户收货地址列表
 * @method array addressCreate($params)添加收货地址
 * @method array addressDef($params)设置默认地址
 * @method array addressRemove($params)删除收货地址
 * @method array addressUpdate($params)修改收货地址
 * @method array userBind($params)用户绑定接口
 * @method array getUserInfoByBind($params)通过绑定信息查询用户
 * @method array getUserInfoById($params)通过用户ID查询用户信息
 * @method array getUserInfoByMobile($params)通过手机号查询用户信息
 * @method array userReg($params)用户注册接口
 * @method array updateUserExtend($params)添加、修改用户扩展信息
 * @method array getUserExtendInfo($params)查询用户扩展信息
 * @method array userUpdateStatus($params)修改用户状态
 * @method array userUpdate($params)修改用户信息
 */
class Dispatch extends Foundation
{
    private $service;

    /**
     * @param $config
     */
    public function __construct(string $service, $config)
    {
        parent::__construct($config);
        $this->service = new $service($config);
    }

    public function __call($name, $arguments)
    {
        return $this->service->{$name}(...$arguments);
    }

}