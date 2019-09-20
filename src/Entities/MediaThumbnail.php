<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

class MediaThumbnail
{
    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $url;

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

    public function setUrl(?string $url): MediaThumbnail
    {
        $this->url = $url;
        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(?int $width): MediaThumbnail
    {
        $this->width = $width;
        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): MediaThumbnail
    {
        $this->height = $height;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
