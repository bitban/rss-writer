<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

class MediaContent
{
    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $url;

    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $type;

    /**
     * @var int|null
     *
     * @Serializer\XmlAttribute()
     */
    private $fileSize;

    /**
     * @var int|null
     *
     * @Serializer\XmlAttribute()
     */
    private $width;

    /**
     * @var int|null
     *
     * @Serializer\XmlAttribute()
     */
    private $height;

    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $medium;

    /**
     * @var bool|null
     *
     * @Serializer\XmlAttribute()
     */
    private $isDefault;

    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $expression;

    /**
     * @var int|null
     *
     * @Serializer\XmlAttribute()
     */
    private $bitrate;

    /**
     * @var int|null
     *
     * @Serializer\XmlAttribute()
     */
    private $framerate;

    /**
     * @var float|null
     *
     * @Serializer\XmlAttribute()
     */
    private $samplingrate;

    /**
     * @var int|null
     *
     * @Serializer\XmlAttribute()
     */
    private $channels;

    /**
     * @var int|null
     *
     * @Serializer\XmlAttribute()
     */
    private $duration;

    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $lang;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): MediaContent
    {
        $this->url = $url;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): MediaContent
    {
        $this->type = $type;
        return $this;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function setFileSize(?int $fileSize): MediaContent
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(?int $width): MediaContent
    {
        $this->width = $width;
        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): MediaContent
    {
        $this->height = $height;
        return $this;
    }

    public function getMedium(): ?string
    {
        return $this->medium;
    }

    public function setMedium(?string $medium): self
    {
        $this->medium = $medium;
        return $this;
    }

    public function getIsDefault(): ?bool
    {
        return $this->isDefault;
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->isDefault = $isDefault;
        return $this;
    }

    public function getExpression(): ?string
    {
        return $this->expression;
    }

    public function setExpression(?string $expression): self
    {
        $this->expression = $expression;
        return $this;
    }

    public function getBitrate(): ?int
    {
        return $this->bitrate;
    }

    public function setBitrate(?int $bitrate): self
    {
        $this->bitrate = $bitrate;
        return $this;
    }

    public function getFramerate(): ?int
    {
        return $this->framerate;
    }

    public function setFramerate(?int $framerate): self
    {
        $this->framerate = $framerate;
        return $this;
    }

    public function getSamplingrate(): ?float
    {
        return $this->samplingrate;
    }

    public function setSamplingrate(?float $samplingrate): self
    {
        $this->samplingrate = $samplingrate;
        return $this;
    }

    public function getChannels(): ?int
    {
        return $this->channels;
    }

    public function setChannels(?int $channels): self
    {
        $this->channels = $channels;
        return $this;
    }

    public function getDuration(): ?int
    {
        return $this->duration;
    }

    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): self
    {
        $this->lang = $lang;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
