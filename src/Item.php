<?php

namespace Dq\DqDispatch;

class Item extends Api
{

    /**取消订单
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function allStore(array $params)
    {
        return $this->request('/item/api/info/allStore', $params, 'GET');
    }

    /**查询卡订单详细卡号
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function storeAllProduct(array $params)
    {
        return $this->request('/item/api/info/storeAllProduct', $params, 'GET');
    }

    /**查询订单配送周期
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function storeProductBarcode(array $params)
    {
        return $this->request('/item/api/info/storeProductBarcode', $params, 'GET');
    }

    /**创建实物卡订单
     * @throws Exception\DqDispatchException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function storeProductBarcodes(array $params)
    {
        return $this->request('/item/api/info/storeProductBarcodes', $params);

    }


}