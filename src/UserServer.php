<?php

namespace Dq\DqDispatch;

class UserServer extends Api
{

    /**用户绑定接口
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function userBind(array $params)
    {
        return $this->request('/user/api/bind', $params);
    }


    /**通过绑定信息查询用户
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserInfoByBind(array $params)
    {
        return $this->request('/user/api/bybind', $params, 'GET');
    }

    /**通过用户ID查询用户信息
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserInfoById(array $params)
    {
        return $this->request('/user/api/byid', $params, 'GET');
    }


    /**通过手机号查询用户信息
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserInfoByMobile(array $params)
    {
        return $this->request('/user/api/bymobile', $params, 'GET');
    }

    /**用户注册接口
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function userReg(array $params)
    {
        return $this->request('/user/api/create', $params);
    }

    /**添加、修改用户扩展信息
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function updateUserExtend(array $params)
    {
        return $this->request('/user/api/extend', $params);
    }

    /**查询用户扩展信息
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getUserExtendInfo(array $params)
    {
        return $this->request('/user/api/extend/info', $params, 'GET');
    }

    /**修改用户状态
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function userUpdateStatus(array $params)
    {
        return $this->request('/user/api/status', $params);
    }


    /**修改用户信息
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function userUpdate(array $params)
    {
        return $this->request('/user/api/update', $params);
    }
}