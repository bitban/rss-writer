<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\BBNX\Rss\Entities;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("item")
 */
class Item
{
    /** @var string|null */
    private $title;

    /** @var string|null */
    private $link;

    /** @var string|null */
    private $description;

    /** @var Guid|null */
    private $guid;

    /**
     * @var \DateTime|null
     *
     * @Serializer\Type("DateTime<'D, d M y H:i:s O'>") # \DateTime::RFC822
     */
    private $pubDate;

    /** @var string|null */
    private $author;

    /** @var Enclosure|null */
    private $enclosure;

    /**
     * @var MediaContent|null
     *
     * @Serializer\XmlElement(namespace="http://search.yahoo.com/mrss/")
     * @Serializer\SerializedName("content")
     */
    private $mediaContent;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://search.yahoo.com/mrss/")
     * @Serializer\SerializedName("title")
     */
    private $mediaTitle;

    /**
     * @var MediaThumbnail|null
     *
     * @Serializer\XmlElement(namespace="http://search.yahoo.com/mrss/")
     * @Serializer\SerializedName("thumbnail")
     */
    private $mediaThumbnail;

    /**
     * @var string[]
     *
     * @Serializer\XmlElement(namespace="http://search.yahoo.com/mrss/")
     * @Serializer\SerializedName("keywords")
     */
    private $mediaKeywords = [];

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): Item
    {
        $this->title = $title;
        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): Item
    {
        $this->link = $link;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Item
    {
        $this->description = $description;
        return $this;
    }

    public function getGuid(): ?Guid
    {
        return $this->guid;
    }

    public function setGuid(?Guid $guid): Item
    {
        $this->guid = $guid;
        return $this;
    }

    public function getPubDate(): ?\DateTime
    {
        return $this->pubDate;
    }

    public function setPubDate(?\DateTime $pubDate): Item
    {
        $this->pubDate = $pubDate;
        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): Item
    {
        $this->author = $author;
        return $this;
    }

    public function getEnclosure(): ?Enclosure
    {
        return $this->enclosure;
    }

    public function setEnclosure(Enclosure $enclosure): Item
    {
        $this->enclosure = $enclosure;
        return $this;
    }

    public function getMediaContent(): ?MediaContent
    {
        return $this->mediaContent;
    }

    public function setMediaContent(?MediaContent $mediaContent): Item
    {
        $this->mediaContent = $mediaContent;
        return $this;
    }

    public function getMediaTitle(): ?string
    {
        return $this->mediaTitle;
    }

    public function setMediaTitle(?string $mediaTitle): Item
    {
        $this->mediaTitle = $mediaTitle;
        return $this;
    }

    public function getMediaThumbnail(): ?MediaThumbnail
    {
        return $this->mediaThumbnail;
    }

    public function setMediaThumbnail(?MediaThumbnail $mediaThumbnail): Item
    {
        $this->mediaThumbnail = $mediaThumbnail;
        return $this;
    }

    public function getMediaKeywords(): ?string
    {
        return !is_null($this->mediaKeywords) ? implode(",", $this->mediaKeywords) : null;
    }

    public function setMediaKeywords(array $mediaKeywords): Item
    {
        $this->mediaKeywords = $mediaKeywords;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
