<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("rss")
 * @Serializer\XmlNamespace(uri="http://search.yahoo.com/mrss/", prefix="media")
 */
class Rss
{
    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     */
    private $version = "2.0";

    /** @var Channel|null */
    private $channel;

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): Rss
    {
        $this->version = $version;
        return $this;
    }

    public function getChannel(): ?Channel
    {
        return $this->channel;
    }

    public function setChannel(?Channel $channel): Rss
    {
        $this->channel = $channel;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
