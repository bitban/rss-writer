<?php
/*
 *
 *  * Copyright 2024 Bitban Technologies, S.L.
 *  * Todos los derechos reservados.
 *
 */

namespace Bitban\RssWriter\Entities;

use Bitban\RssWriter\Entities\Google\Channel;
use Bitban\RssWriter\Interfaces\ChannelInterface;
use Bitban\RssWriter\Interfaces\RssInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("rss")
 * @Serializer\XmlNamespace(uri="http://search.yahoo.com/mrss/", prefix="media")
 * @Serializer\XmlNamespace(uri="http://schemas.google.com/pcn/2020", prefix="g")
 */
class RssGoogleNewsShowcase implements RssInterface
{
    /**
     * @var string
     *
     * @Serializer\XmlAttribute()
     */
    private $version = "2.0";

    /** @var Channel|null */
    private $channel;

    /**
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string|null $version
     * @return self
     */
    public function setVersion(?string $version): RssInterface
    {
        $this->version = $version;
        return $this;
    }

    /**
     * @return Channel|null
     */
    public function getChannel(): ?Channel
    {
        return $this->channel;
    }

    /**
     * @param Channel|null $channel
     * @return self
     */
    public function setChannel(?ChannelInterface $channel): RssInterface
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return static
     */
    public static function make()
    {
        return new static();
    }
}
