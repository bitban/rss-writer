<?php
/**
 * Copyright 2021 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 */
class AtomLink
{
    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $href;

    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $rel;

    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $type;

    /**
     * @return string|null
     */
    public function getHref(): ?string
    {
        return $this->href;
    }

    /**
     * @param string|null $href
     */
    public function setHref(?string $href): AtomLink
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRel(): ?string
    {
        return $this->rel;
    }

    /**
     * @param string|null $rel
     */
    public function setRel(?string $rel): AtomLink
    {
        $this->rel = $rel;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     */
    public function setType(?string $type): AtomLink
    {
        $this->type = $type;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
