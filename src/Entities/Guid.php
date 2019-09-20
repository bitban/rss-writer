<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 */
class Guid
{
    /**
     * @var string|null
     *
     * @Serializer\XmlValue()
     */
    private $url;

    /**
     * @var bool
     *
     * @Serializer\XmlAttribute()
     */
    private $isPermalink = true;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): Guid
    {
        $this->url = $url;
        return $this;
    }

    public function getIsPermalink(): bool
    {
        return $this->isPermalink;
    }

    public function setIsPermalink(bool $isPermalink): Guid
    {
        $this->isPermalink = $isPermalink;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
