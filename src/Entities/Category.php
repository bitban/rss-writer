<?php
/**
 * Copyright 2020 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

class Category
{
    /**
     * @var string|null
     * @Serializer\XmlAttribute
     */
    protected $text;

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
