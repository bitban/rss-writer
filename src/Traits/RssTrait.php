<?php

namespace Bitban\BBNX\Rss\Traits;

use Bitban\BBNX\Rss\Entities\Channel;
use Bitban\BBNX\Rss\Interfaces\RssInterface;
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
    public function setChannel(?Channel $channel): RssInterface
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
