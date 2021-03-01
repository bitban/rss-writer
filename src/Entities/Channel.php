<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("channel")
 */
class Channel
{
    /** @var string|null */
    protected $title;

    /** @var string|null */
    protected $link;

    /** @var string|null */
    protected $description;

    /** @var string|null */
    protected $language;

    /** @var string|null */
    protected $copyright;

    /** @var int|null */
    protected $ttl;

    /** @var ChannelImage */
    protected $image;

    /**
     * @var Item[]
     *
     * @Serializer\XmlList(inline = true, entry = "item")
     */
    protected $items = [];

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     * @return Channel
     */
    public function setTitle(?string $title): Channel
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLink(): ?string
    {
        return $this->link;
    }

    /**
     * @param string|null $link
     * @return Channel
     */
    public function setLink(?string $link): Channel
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     * @return Channel
     */
    public function setDescription(?string $description): Channel
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @param string|null $language
     * @return Channel
     */
    public function setLanguage(?string $language): Channel
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCopyright(): ?string
    {
        return $this->copyright;
    }

    /**
     * @param string|null $copyright
     * @return Channel
     */
    public function setCopyright(?string $copyright): Channel
    {
        $this->copyright = $copyright;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getTtl(): ?int
    {
        return $this->ttl;
    }

    /**
     * @param int|null $ttl
     * @return Channel
     */
    public function setTtl(?int $ttl): Channel
    {
        $this->ttl = $ttl;
        return $this;
    }

    /**
     * @return ChannelImage
     */
    public function getImage(): ?ChannelImage
    {
        return $this->image;
    }

    /**
     * @param ChannelImage $image
     * @return Channel
     */
    public function setImage(?ChannelImage $image): Channel
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     * @return Channel
     */
    public function setItems(array $items): Channel
    {
        $this->items = $items;
        return $this;
    }

    public function addItem(Item $item): Channel
    {
        $this->items[] = $item;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
