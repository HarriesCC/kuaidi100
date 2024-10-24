<?php

namespace HarriesCC\Kuaidi100\Models;

class LabelCancelRequest {

    protected string $partnerId;

    protected string $partnerKey;

    protected string $partnerSecret;

    protected string $partnerName;

    protected string $net;

    protected string $code;

    protected string $kuaidicom;

    protected string $kuaidinum;

    protected string $orderId;

    protected string $reason;

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
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
    public function getKuaidicom(): string
    {
        return $this->kuaidicom;
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
    public function getKuaidinum(): string
    {
        return $this->kuaidinum;
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
    public function getNet(): string
    {
        return $this->net;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
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
    public function getPartnerId(): string
    {
        return $this->partnerId;
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
    public function getPartnerKey(): string
    {
        return $this->partnerKey;
    }

    /**
     * @param string $partnerName
     */
    public function setPartnerName(string $partnerName): void
    {
        $this->partnerName = $partnerName;
    }

    /**
     * @return string
     */
    public function getPartnerName(): string
    {
        return $this->partnerName;
    }

    /**
     * @param string $partnerSecret
     */
    public function setPartnerSecret(string $partnerSecret): void
    {
        $this->partnerSecret = $partnerSecret;
    }

    /**
     * @return string
     */
    public function getPartnerSecret(): string
    {
        return $this->partnerSecret;
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
    public function getReason(): string
    {
        return $this->reason;
    }

    public function toArray() {
        $array = [
            'kuaidicom' => $this->kuaidicom,
            'kuaidinum' => $this->kuaidinum,
        ];

        if ($this->net) {
            $array['net'] = $this->net;
        }

        if ($this->code) {
            $array['code'] = $this->code;
        }

        if ($this->orderId) {
            $array['orderId'] = $this->orderId;
        }

        if ($this->reason) {
            $array['reason'] = $this->reason;
        }

        if ($this->partnerId) {
            $array['partnerId'] = $this->partnerId;
        }

        if ($this->partnerKey) {
            $array['partnerKey'] = $this->partnerKey;
        }

        if ($this->partnerName) {
            $array['partnerName'] = $this->partnerName;
        }

        if ($this->partnerSecret) {
            $array['partnerSecret'] = $this->partnerSecret;
        }

        if ($this->reason) {
            $array['reason'] = $this->reason;
        }

        return $array;
    }
}