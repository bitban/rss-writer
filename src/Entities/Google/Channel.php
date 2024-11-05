<?php
/*
 *
 *  * Copyright 2024 Bitban Technologies, S.L.
 *  * Todos los derechos reservados.
 *
 */

namespace Bitban\RssWriter\Entities\Google;

use Bitban\RssWriter\Interfaces\ChannelInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("channel")
 */
class Channel implements ChannelInterface
{
    /** @var string|null */
    private $title;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(cdata=false)
     */
    private $link;

    /** @var string|null */
    private $description;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(cdata=false)
     */
    private $language;

    /**
     * @var Item[]
     *
     * @Serializer\XmlList(inline = true, entry = "item")
     */
    private $items = [];

    /**
     * @var string|null
     * @Serializer\XmlElement(namespace="http://webfeeds.org/rss/1.0")
     * @Serializer\SerializedName("icon")
     */
    private $icon;

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
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @param string|null $icon
     * @return \Bitban\RssWriter\Entities\Channel
     */
    public function setIcon(?string $icon): Channel
    {
        $this->icon = $icon;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
