<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\BBNX\Rss\Entities;

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
    private $isPermaLink = true;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): Guid
    {
        $this->url = $url;
        return $this;
    }

    public function getIsPermaLink(): bool
    {
        return $this->isPermaLink;
    }

    public function setIsPermaLink(bool $isPermaLink): Guid
    {
        $this->isPermaLink = $isPermaLink;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
