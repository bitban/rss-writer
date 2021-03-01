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
class ChannelImage
{
    /** @var string|null */
    private $url;

    /** @var string|null */
    private $title;

    /** @var string|null */
    private $link;

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): ChannelImage
    {
        $this->url = $url;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): ChannelImage
    {
        $this->title = $title;
        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): ChannelImage
    {
        $this->link = $link;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
