<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Services;

use Bitban\RssWriter\Entities\Rss;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use Bitban\RssWriter\Interfaces\RssInterface;

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
