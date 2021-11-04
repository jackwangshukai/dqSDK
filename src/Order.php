<?php

namespace Dq\DqDispatch;

class Order extends Api
{

    /**取消订单
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function cancelOrder(array $params)
    {
        return $this->request('/order/api/order/cancel', $params, 'GET');
    }

    /**查询卡订单详细卡号
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderCards(array $params)
    {
        return $this->request('/order/api/order/cards', $params, 'GET');
    }

    /**查询订单配送周期
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderCycle(array $params)
    {
        return $this->request('/order/api/order/cycle', $params, 'GET');
    }

    /**创建实物卡订单
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function entityOrder(array $params)
    {
        return $this->request('/order/api/order/entity/create', $params);

    }

    /**订单收货
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderFinish(array $params)
    {
        return $this->request('/order/api/order/finish', $params,'GET');
    }

    /** 查询订单信息
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderInfo(array $params)
    {
        return $this->request('/order/api/order/info', $params,'GET');

    }

    /**暂停周期购订单
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderPause(array $params)
    {
        return $this->request('/order/api/order/pause', $params,'GET');

    }

    /**查询关联单号
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderRelation(array $params)
    {
        return $this->request('/order/api/order/relation', $params,'GET');
    }

    /**恢复周期购订单
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderRestore(array $params)
    {
        return $this->request('/order/api/order/restore', $params);

    }

    /**查询单个订单状态
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderSingleStatus(array $params)
    {
        return $this->request('/order/api/order/status', $params, 'GET');

    }

    /**查询批量订单状态
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderBatchStatus(array $params)
    {
        return $this->request('/order/api/order/status', $params);

    }

    /**查询订单物流信息
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function orderTracking(array $params)
    {
        return $this->request('/order/api/order/tracking', $params,'GET');

    }
}