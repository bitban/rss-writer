<?php
/**
 * Copyright 2020 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("owner")
 */
class Owner
{
    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var string|null
     *
     * @Serializer\XmlElement(namespace="http://www.itunes.com/dtds/podcast-1.0.dtd")
     * @Serializer\SerializedName("email")
     */
    private $email;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
