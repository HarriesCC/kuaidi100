<?php


namespace HarriesCC\Kuaidi100;

use HarriesCC\Kuaidi100\Exceptions\Exception;
use HarriesCC\Kuaidi100\Exceptions\HttpException;
use HarriesCC\Kuaidi100\Exceptions\InvalidArgumentException;

/**
 * 快递查询类
 * Class Tracker
 * @package HarriesCC\Kuaidi100
 */
class Tracker extends Base
{
    private $param = [];

    /**
     * @param array $param
     */
    public function setParam($param)
    {
        $this->param = $param;
    }

    /**
     * 实时查询接口
     * @param string $com
     * @param string $num
     * @return string
     * @throws HttpException
     * @throws InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function track(string $com,string $num)
    {
        $url = 'https://poll.kuaidi100.com/poll/query.do';

        if (empty($this->options['customer'])) {
            throw new InvalidArgumentException('customer不能为空');
        }

        if (empty($com)) {
            throw new InvalidArgumentException('物流公司编码不能为空');
        }

        if (empty($num)) {
            throw new InvalidArgumentException('快递单号不能为空');
        }

        $this->param['com'] = $com;
        $this->param['num'] = $num;

        $sign = strtoupper(md5(json_encode($this->param).$this->key.$this->options['customer']));

        $query = [
            'customer' => $this->options['customer'],
            'sign' => $sign,
            'param' => json_encode($this->param)
        ];

        try {
            $response = $this->getHttpClient()->request('POST', $url, [
                'form_params' => $query,
            ])->getBody()->getContents();
            return $response;
        } catch (Exception $e) {
            print_r($e);
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * 只能判断接口查询，查询结果不准，不建议使用
     * @param string $num
     * @return string
     * @throws HttpException
     * @throws InvalidArgumentException
     */
    public function getAutoTrack(string $num)
    {
        $url = 'http://www.kuaidi100.com/autonumber/auto';

        if (empty($num)) {
            throw new InvalidArgumentException('快递单号不能为空');
        }

        $query = [
            'num' => $num,
            'key' => $this->options['key']
        ];

        try {
            $response = $this->getHttpClient()->get($url, [
                'query' => $query,
            ])->getBody()->getContents();
            return $response;
        } catch (Exception $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }
}