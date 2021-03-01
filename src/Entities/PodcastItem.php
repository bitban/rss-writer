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
class PodcastItem extends Item
{

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("author")
     */
    protected $author;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("subtitle")
     */
    protected $subtitle;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("summary")
     */
    protected $summary;

    /** @var PodcastImage|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("image")
     */
    protected $image;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("summary")
     */
    protected $duration;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("summary")
     */
    protected $keywords;

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;
        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): self
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setSummary(?string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    public function getImage(): ?PodcastImage
    {
        return $this->image;
    }

    public function setImage(?PodcastImage $image): self
    {
        $this->image = $image;
        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
