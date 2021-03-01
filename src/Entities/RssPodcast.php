<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\BBNX\Rss\Entities;

use Bitban\BBNX\Rss\Interfaces\RssInterface;
use Bitban\BBNX\Rss\Traits\RssTrait;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("rss")
 * @Serializer\XmlNamespace(uri="http://www.itunes.com/dtds/podcast-1.0.dtd", prefix="itunes")
 */
class RssPodcast implements RssInterface
{
    use RssTrait;
}
