<?php

namespace Dq\DqDispatch;

class Card extends Api
{
    /** 根据卡批次获取卡信息
     * @param array $params
     * @return mixed
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getBatchInfo(array $params)
    {
        return $this->request('/item/api/card/batch', $params, 'GET');
    }

    /** 提交实体卡兑换
     * @param array $params
     * @return mixed
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function postCardEntity(array $params)
    {
        return $this->request('/item/api/card/entity', $params);
    }

    /** 兑换卡接口
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function exchange(array $params)
    {
        return $this->request('/item/api/card/exchange', $params);
    }

    /**查询卡信息接口
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryCardInfo(array $params)
    {
        return $this->request('/item/api/card/query', $params, 'GET');
    }

    /**查询租户下所有商品
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function queryCardGoods(array $params)
    {
        return $this->request('/item/api/card/goods', $params, 'GET');
    }

    /**电子卡领取接口
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function take(array $params)
    {
        return $this->request('/item/api/card/take', $params, 'GET');
    }
}