<?php
/*
 *
 *  * Copyright 2024 Bitban Technologies, S.L.
 *  * Todos los derechos reservados.
 *
 */

namespace Bitban\RssWriter\Entities\Google;

use Bitban\RssWriter\Entities\MediaContent;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("item")
 */
class Item
{
    /**
     * @var \DateTime|null
     *
     * @Serializer\Type("DateTime<'D, d M Y H:i:s O'>") # \DateTime::RFC822
     * @Serializer\XmlElement(cdata=false)
     */
    private $pubDate;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(cdata=false)
     */
    private $guid;

    /**
     * @var Panel|null
     *
     * @Serializer\XmlElement(namespace="http://schemas.google.com/pcn/2020")
     * @Serializer\SerializedName("panel")
     */
    private $panel;

    /** @var string|null */
    private $title;

    /** @var string|null */
    private $description;

    /** @var string|null */
    private $author;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(cdata=false)
     */
    private $link;

    /**
     * @var MediaContent|null
     *
     * @Serializer\XmlElement(namespace="http://search.yahoo.com/mrss/")
     * @Serializer\SerializedName("content")
     */
    private $mediaContent;

    /**
     * @var ListItem|null
     *
     * @Serializer\XmlElement(namespace="http://schemas.google.com/pcn/2020")
     * @Serializer\SerializedName("bullet_list")
     */
    private $bulletList;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(?string $guid): self
    {
        $this->guid = $guid;
        return $this;
    }

    public function getPubDate(): ?\DateTime
    {
        return $this->pubDate;
    }

    public function setPubDate(?\DateTime $pubDate): self
    {
        $this->pubDate = $pubDate;
        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;
        return $this;
    }

    public function getMediaContent(): ?MediaContent
    {
        return $this->mediaContent;
    }

    public function setMediaContent(?MediaContent $mediaContent): self
    {
        $this->mediaContent = $mediaContent;
        return $this;
    }

    public function getPanel(): ?Panel
    {
        return $this->panel;
    }

    public function setPanel(?Panel $panel): self
    {
        $this->panel = $panel;
        return $this;
    }

    public function getBulletList(): ?ListItem
    {
        return $this->bulletList;
    }

    public function setBulletList(?ListItem $bulletList): self
    {
        $this->bulletList = $bulletList;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
