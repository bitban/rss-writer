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
class PodcastImage
{
    /** @var string|null
     *
     * @Serializer\XmlAttribute
     */
    private $href;

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function setHref(?string $href): self
    {
        $this->href = $href;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
