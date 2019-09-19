<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\BBNX\Rss\Entities;

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

    public static function make()
    {
        return new static();
    }
}
