<?php

namespace Dq\DqDispatch;

class UserAddress extends Api
{
    /**查询用户收货地址列表
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addressByUser(array $params)
    {
        return $this->request('/user/address/byuser', $params, 'GET');
    }

    /**添加收货地址
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addressCreate(array $params)
    {
        return $this->request('/user/address/create', $params);
    }

    /**设置默认地址
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addressDef(array $params)
    {
        return $this->request('/user/address/def', $params);
    }

    /**删除收货地址
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addressRemove(array $params)
    {
        return $this->request('/user/address/def', $params);
    }

    /**修改收货地址
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addressUpdate(array $params)
    {
        return $this->request('/user/address/update', $params);
    }

}