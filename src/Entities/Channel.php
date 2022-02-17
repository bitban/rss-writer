<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\BBNX\Rss\Entities;

use Bitban\BBNX\Rss\Entities\AtomLink;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("channel")
 */
class Channel
{
    /** @var string|null */
    private $title;

    /** @var string|null */
    private $link;

    /** @var string|null */
    private $description;

    /** @var string|null */
    private $language;

    /** @var string|null */
    private $copyright;

    /** @var int|null */
    private $ttl;

    /** @var ChannelImage */
    private $image;

    /**
     * @var AtomLink|null
     * @Serializer\XmlElement(namespace="http://www.w3.org/2005/Atom")
     * @Serializer\SerializedName("link")
     */
    private $atomLink;

    /**
     * @var Item[]
     *
     * @Serializer\XmlList(inline = true, entry = "item")
     */
    private $items = [];

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

    /**
     * @return AtomLink|null
     */
    public function getAtomLink(): ?AtomLink
    {
        return $this->atomLink;
    }

    /**
     * @param AtomLink|null $atomLink
     */
    public function setAtomLink(?AtomLink $atomLink): Channel
    {
        $this->atomLink = $atomLink;
        return $this;
    }
    public static function make()
    {
        return new static();
    }
}
