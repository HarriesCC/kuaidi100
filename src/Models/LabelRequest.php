<?php

namespace HarriesCC\Kuaidi100\Models;

class LabelRequest {

    protected string $partnerId;

    protected string $kuaidicom;

    protected Man $recMan;

    protected Man $sendMan;

    protected string $printType;

    protected int $count = 1;

    protected string $tempId;

    protected string $siid;

    protected string $orderId;

    protected string $expType;

    function setPartnerId($partnerId): self {
        $this->partnerId = $partnerId;
        return $this;
    }

    function setKuaidicom($kuaidicom): self {
        $this->kuaidicom = $kuaidicom;
        return $this;
    }

    /**
     * @param Man $recMan
     * @return LabelRequest
     */
    public function setRecMan(Man $recMan): self
    {
        $this->recMan = $recMan;
        return $this;
    }

    /**
     * @param Man $sendMan
     * @return LabelRequest
     */
    public function setSendMan(Man $sendMan): self
    {
        $this->sendMan = $sendMan;
        return $this;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): self
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;
        return $this;
    }

    /**
     * @param string $printType
     */
    public function setPrintType(string $printType): self
    {
        $this->printType = $printType;
        return $this;
    }

    /**
     * @param string $siid
     */
    public function setSiid(string $siid): self
    {
        $this->siid = $siid;
        return $this;
    }

    /**
     * @param string $tempId
     */
    public function setTempId(string $tempId): self
    {
        $this->tempId = $tempId;
        return $this;
    }

    function getPartnerId(): string
    {
        return $this->partnerId;
    }

    function getKuaidicom(): string
    {
        return $this->kuaidicom;
    }

    /**
     * @param string $expType
     */
    public function setExpType(string $expType): void
    {
        $this->expType = $expType;
    }

    /**
     * @return string
     */
    public function getExpType(): string
    {
        return $this->expType;
    }

    public function toArray() {
        $array = [
            'partnerId' => $this->partnerId,
            'kuaidicom' => $this->kuaidicom,
            'printType' => $this->printType,
            'expType' => $this->expType,
            'count' => $this->count,
            'recMan' => $this->recMan->toArray(),
            'sendMan' => $this->sendMan->toArray()
        ];

        if (!empty($this->tempId)) {
            $array['tempId'] = $this->tempId;
        }

        if (!empty($this->siid)) {
            $array['siid'] = $this->siid;
        }

        return $array;
    }
}