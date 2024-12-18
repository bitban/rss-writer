<?php

namespace Bitban\RssWriter\Traits;

use Bitban\RssWriter\Entities\Channel;
use Bitban\RssWriter\Interfaces\ChannelInterface;
use Bitban\RssWriter\Interfaces\RssInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * Copyright 2020 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

trait RssTrait
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
     * @return self|RssInterface
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
     * @return self|RssInterface
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
