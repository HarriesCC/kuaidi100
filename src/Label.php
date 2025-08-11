<?php


namespace HarriesCC\Kuaidi100;

use GuzzleHttp\Exception\GuzzleException;
use HarriesCC\Kuaidi100\Exceptions\HttpException;
use HarriesCC\Kuaidi100\Exceptions\InvalidArgumentException;
use HarriesCC\Kuaidi100\Models\LabelCancelRequest;
use HarriesCC\Kuaidi100\Models\LabelInterceptRequest;
use HarriesCC\Kuaidi100\Models\LabelRequest;

/**
 * 电子面单
 * Class CloudPrint
 * @package HarriesCC\Kuaidi100
 */
class Label extends Base
{
    protected string $path = '/label/order';

    private $sign;

    /**
     * @return mixed
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * 创建电子面单
     * @param array $param
     * @return string
     * @throws HttpException
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function createOrder(LabelRequest $request)
    {
        $url = $this->endpoint . $this->path;

        $param = $request->toArray();

        $t = time();

        $this->sign = $sign = strtoupper(md5(json_encode($param) . $t . $this->key . $this->options['secret']));

        $params = [
            'method' => 'order',
            'key' => $this->options['key'],
            'sign' => $sign,
            't' => $t,
            'param' => json_encode($param)
        ];

        try {
            $response = $this->getHttpClient()->request('POST', $url, [
                'form_params' => $params,
            ])->getBody()->getContents();
            return $response;
        } catch (\Exception $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function cancel(LabelCancelRequest $request)
    {
        $url = $this->endpoint . $this->path;

        $param = $request->toArray();

        $t = time();

        $this->sign = $sign = strtoupper(md5(json_encode($param) . $t . $this->key . $this->options['secret']));

        $params = [
            'method' => 'cancel',
            'key' => $this->options['key'],
            'sign' => $sign,
            't' => $t,
            'param' => json_encode($param)
        ];

        try {
            $response = $this->getHttpClient()->request('POST', $url, [
                'form_params' => $params,
            ])->getBody()->getContents();
            return $response;
        } catch (\Exception $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function interceptOrder(LabelInterceptRequest $request)
    {
        $url = $this->endpoint . $this->path;

        $param = $request->toArray();

        $t = time();

        $this->sign = $sign = strtoupper(md5(json_encode($param) . $t . $this->key . $this->options['secret']));

        $params = [
            'method' => 'interceptOrder',
            'key' => $this->options['key'],
            'sign' => $sign,
            't' => $t,
            'param' => json_encode($param)
        ];

        try {
            $response = $this->getHttpClient()->request('POST', $url, [
                'form_params' => $params,
            ])->getBody()->getContents();
            return $response;
        } catch (\Exception $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * 电子面单复打
     * @param string $taskId
     * @return string
     * @throws HttpException
     * @throws InvalidArgumentException
     * @throws GuzzleException
     */
    public function print($taskId, $printer_id = null)
    {
        $url = $this->endpoint . $this->path;

        $param = [
            'taskId' => $taskId,
        ];

        if ($printer_id) {
            $param['siid'] = $printer_id;
        }

        $t = time();

        $this->sign = $sign = strtoupper(md5(json_encode($param) . $t . $this->key . $this->options['secret']));

        $params = [
            'method' => 'printOld',
            'key' => $this->options['key'],
            'sign' => $sign,
            't' => $t,
            'param' => json_encode($param)
        ];

        try {
            $response = $this->getHttpClient()->request('POST', $url, [
                'form_params' => $params,
            ])->getBody()->getContents();
            return $response;
        } catch (\Exception $e) {
            throw new HttpException($e->getMessage(), $e->getCode(), $e);
        }
    }
}