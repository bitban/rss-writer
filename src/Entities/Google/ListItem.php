<?php
/*
 *
 *  * Copyright 2024 Bitban Technologies, S.L.
 *  * Todos los derechos reservados.
 *
 */

namespace Bitban\RssWriter\Entities\Google;

use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("g:list_item")
 */
class ListItem
{

    /**
     * @var string[]
     *
     * @Serializer\XmlList(inline = true, entry = "g:list_item")
     */
    private $listItem;

    public function getListItem(): array
    {
        return $this->listItem;
    }

    public function setListItem(array $listItem): self
    {
        $this->listItem = $listItem;
        return $this;
    }

    public function addListItem(string $listItem): self
    {
        $this->listItem[] = $listItem;
        return $this;
    }

    public static function make()
    {
        return new static();
    }
}
