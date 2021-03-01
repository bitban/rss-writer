<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\BBNX\Rss\Services;

use Bitban\BBNX\Rss\Interfaces\RssInterface;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;

class RssWriter
{
    public function write(RssInterface $rss): string
    {
        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->setPropertyNamingStrategy(
            new SerializedNameAnnotationStrategy(
                new IdenticalPropertyNamingStrategy()
            )
        );
        $serializer = $serializerBuilder->build();
        $xml = $serializer->serialize($rss, "xml");
        return $xml;
    }
}
