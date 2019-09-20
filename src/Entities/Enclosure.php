<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

class Enclosure
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
    private $length;

    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $type;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): Enclosure
    {
        $this->url = $url;
        return $this;
    }

    public function getLength(): ?int
    {
        return $this->length;
    }

    public function setLength(?int $length): Enclosure
    {
        $this->length = $length;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): Enclosure
    {
        $this->type = $type;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
