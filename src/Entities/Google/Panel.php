<?php
/*
 *
 *  * Copyright 2024 Bitban Technologies, S.L.
 *  * Todos los derechos reservados.
 *
 */

namespace Bitban\RssWriter\Entities\Google;

use JMS\Serializer\Annotation as Serializer;

class Panel
{
    /**
     * @var string|null
     *
     * @Serializer\XmlAttribute()
     */
    private $type;

    /**
     * @param string|null $type
     */
    public function __construct(?string $type)
    {
        $this->type = $type;
    }


    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }
}
