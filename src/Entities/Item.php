<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

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

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://purl.org/rss/1.0/modules/content/")
     * @Serializer\SerializedName("encoded")
     */
    private $contentEncoded;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://purl.org/dc/elements/1.1/")
     * @Serializer\SerializedName("creator")
     */
    private $dcCreator;

    /** @var Guid|null */
    private $guid;

    /**
     * @var \DateTime|null
     *
     * @Serializer\Type("DateTime<'D, d M Y H:i:s O'>") # \DateTime::RFC822
     */
    private $pubDate;

    /** @var string|null
     *
     * @Serializer\XmlElement(namespace="http://purl.org/dc/terms/")
     * @Serializer\SerializedName("issued")
     */
    private $dcTermsIssued;

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

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://search.yahoo.com/mrss/")
     * @Serializer\SerializedName("credit")
     */
    private $mediaCredit;


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

    public function getContentEncoded(): ?string
    {
        return $this->contentEncoded;
    }

    public function setContentEncoded(?string $contentEncoded): Item
    {
        $this->contentEncoded = $contentEncoded;
        return $this;
    }

    public function getDcCreator(): ?string
    {
        return $this->dcCreator;
    }

    public function setDcCreator(?string $dcCreator): Item
    {
        $this->dcCreator = $dcCreator;
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
        return (count($this->mediaKeywords) > 0) ? implode(",", $this->mediaKeywords) : null;
    }

    public function setMediaKeywords(array $mediaKeywords): Item
    {
        $this->mediaKeywords = $mediaKeywords;
        return $this;
    }

    public function getMediaCredit(): ?string
    {
        return $this->mediaCredit;
    }

    public function setMediaCredit(?string $mediaCredit): Item
    {
        $this->mediaCredit = $mediaCredit;
        return $this;
    }

    public function getDcTermsIssued(): ?string
    {
        return $this->dcTermsIssued;
    }

    public function setDcTermsIssued(?string $dcTermsIssued): Item
    {
        $this->dcTermsIssued = $dcTermsIssued;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
