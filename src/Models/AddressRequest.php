<?php

namespace HarriesCC\Kuaidi100\Models;

class AddressRequest {

    protected string $content;

    protected string $image;

    protected string $imageUrl;

    protected string $pdfUrl;

    protected string $htmlUrl;


    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $htmlUrl
     */
    public function setHtmlUrl(string $htmlUrl): void
    {
        $this->htmlUrl = $htmlUrl;
    }

    /**
     * @return string
     */
    public function getHtmlUrl(): string
    {
        return $this->htmlUrl;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl(string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $pdfUrl
     */
    public function setPdfUrl(string $pdfUrl): void
    {
        $this->pdfUrl = $pdfUrl;
    }

    /**
     * @return string
     */
    public function getPdfUrl(): string
    {
        return $this->pdfUrl;
    }

    public function toArray() {
        $array = [

        ];

        if (!empty($this->content)) {
            $array['content'] = $this->content;
        }

        if (!empty($this->image)) {
            $array['image'] = $this->image;
        }

        if (!empty($this->imageUrl)) {
            $array['imageUrl'] = $this->imageUrl;
        }

        if (!empty($this->pdfUrl)) {
            $array['pdfUrl'] = $this->pdfUrl;
        }

        if (!empty($this->htmlUrl)) {
            $array['htmlUrl'] = $this->htmlUrl;
        }

        return $array;
    }
}