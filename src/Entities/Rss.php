<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use Bitban\RssWriter\Interfaces\RssInterface;
use Bitban\RssWriter\Traits\RssTrait;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("rss")
 * @Serializer\XmlNamespace(uri="http://search.yahoo.com/mrss/", prefix="media")
 * @Serializer\XmlNamespace(uri="http://purl.org/dc/elements/1.1/", prefix="dc")
 * @Serializer\XmlNamespace(uri="http://purl.org/dc/terms/", prefix="dcterms")
 * @Serializer\XmlNamespace(uri="http://www.w3.org/2005/Atom", prefix="atom")
 * @Serializer\XmlNamespace(uri="http://webfeeds.org/rss/1.0", prefix="webfeeds")
 * @Serializer\XmlNamespace(uri="http://purl.org/rss/1.0/modules/content/", prefix="content")
 */
class Rss implements RssInterface
{
    use RssTrait;
}
