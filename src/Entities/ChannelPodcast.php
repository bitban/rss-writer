<?php
/**
 * Copyright 2021 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

class ChannelPodcast extends Channel
{
    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("author")
     */
    private $author;

    /**
     * @var Category|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("category")
     */
    private $category;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("explicit")
     *
     */
    private $explicit;

    /** @var Owner|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("owner")
     */
    protected $owner;

    /** @var PodcastImage|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("image")
     */
    protected $podcastImage;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("subtitle")
     */
    private $subtitle;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("summary")
     */
    private $summary;

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;
        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getExplicit(): string
    {
        return $this->explicit;
    }

    public function setExplicit(string $explicit): self
    {
        $this->explicit = $explicit;
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

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): self
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    public function getPodcastImage(): ?PodcastImage
    {
        return $this->podcastImage;
    }

    public function setPodcastImage(?PodcastImage $image): self
    {
        $this->podcastImage = $image;
        return $this;
    }

    public function getOwner(): ?Owner
    {
        return $this->owner;
    }

    public function setOwner(?Owner $owner): self
    {
        $this->owner = $owner;
        return $this;
    }
}
