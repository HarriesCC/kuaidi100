<?php

namespace HarriesCC\Kuaidi100\Models;

class LabelInterceptRequest {

    protected string $kuaidicom;

    protected string $kuaidinum;

    protected string $interceptType;

    protected string $partnerId;

    protected string $partnerKey;

    protected string $net;
    protected string $reason;

    protected string $orderid;

    protected Man $recManInfo;

    protected string $salt;

    protected string $callbackUrl;

    protected string $appKey;

    protected string $appSecret;


    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getPartnerKey(): string
    {
        return $this->partnerKey;
    }

    /**
     * @param string $partnerKey
     */
    public function setPartnerKey(string $partnerKey): void
    {
        $this->partnerKey = $partnerKey;
    }

    /**
     * @return string
     */
    public function getPartnerId(): string
    {
        return $this->partnerId;
    }

    /**
     * @param string $partnerId
     */
    public function setPartnerId(string $partnerId): void
    {
        $this->partnerId = $partnerId;
    }

    /**
     * @return string
     */
    public function getNet(): string
    {
        return $this->net;
    }

    /**
     * @param string $net
     */
    public function setNet(string $net): void
    {
        $this->net = $net;
    }

    /**
     * @return string
     */
    public function getKuaidinum(): string
    {
        return $this->kuaidinum;
    }

    /**
     * @param string $kuaidinum
     */
    public function setKuaidinum(string $kuaidinum): void
    {
        $this->kuaidinum = $kuaidinum;
    }

    /**
     * @return string
     */
    public function getKuaidicom(): string
    {
        return $this->kuaidicom;
    }

    /**
     * @param string $kuaidicom
     */
    public function setKuaidicom(string $kuaidicom): void
    {
        $this->kuaidicom = $kuaidicom;
    }

    /**
     * @return string
     */
    public function getAppKey(): string
    {
        return $this->appKey;
    }

    /**
     * @param string $appKey
     */
    public function setAppKey(string $appKey): void
    {
        $this->appKey = $appKey;
    }

    /**
     * @return string
     */
    public function getAppSecret(): string
    {
        return $this->appSecret;
    }

    /**
     * @param string $appSecret
     */
    public function setAppSecret(string $appSecret): void
    {
        $this->appSecret = $appSecret;
    }

    /**
     * @return string
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     */
    public function setCallbackUrl(string $callbackUrl): void
    {
        $this->callbackUrl = $callbackUrl;
    }

    /**
     * @return string
     */
    public function getInterceptType(): string
    {
        return $this->interceptType;
    }

    /**
     * @param string $interceptType
     */
    public function setInterceptType(string $interceptType): void
    {
        $this->interceptType = $interceptType;
    }

    /**
     * @return string
     */
    public function getOrderid(): string
    {
        return $this->orderid;
    }

    /**
     * @param string $orderid
     */
    public function setOrderid(string $orderid): void
    {
        $this->orderid = $orderid;
    }

    /**
     * @return Man
     */
    public function getRecManInfo(): Man
    {
        return $this->recManInfo;
    }

    /**
     * @param Man $recManInfo
     */
    public function setRecManInfo(Man $recManInfo): void
    {
        $this->recManInfo = $recManInfo;
    }

    /**
     * @return string
     */
    public function getSalt(): string
    {
        return $this->salt;
    }

    /**
     * @param string $salt
     */
    public function setSalt(string $salt): void
    {
        $this->salt = $salt;
    }


    public function toArray() {
        $array = [
            'kuaidicom' => $this->kuaidicom,
            'kuaidinum' => $this->kuaidinum,
            'interceptType' => $this->interceptType,
        ];

        if ($this->partnerId) {
            $array['partnerId'] = $this->partnerId;
        }

        if ($this->partnerKey) {
            $array['partnerKey'] = $this->partnerKey;
        }

        if ($this->net) {
            $array['net'] = $this->net;
        }

        if ($this->reason) {
            $array['reason'] = $this->reason;
        }

        if ($this->orderid) {
            $array['orderid'] = $this->orderid;
        }

        if ($this->recManInfo) {
            $array['recManInfo'] = $this->recManInfo->toArray();
        }

        if ($this->salt) {
            $array['salt'] = $this->salt;
        }

        if ($this->callbackUrl) {
            $array['callbackUrl'] = $this->callbackUrl;
        }

        if ($this->appKey) {
            $array['appKey'] = $this->appKey;
        }

        if ($this->appSecret) {
            $array['appSecret'] = $this->appSecret;
        }

        return $array;
    }
}