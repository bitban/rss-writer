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
        $xml = $this->removeUnusedNamespaces($rss, $xml);
        return $xml;
    }

    /**
     * Eliminamos namespace si no se está indicando Icon.
     * Eso lo hacemos no cargar ese namespace si no estrictamente necesario y
     * evitar el warning "Use of unknown namespace: http://webfeeds.org/rss/1.0"
     *
     * @param RssInterface $rss
     * @param string $xml
     * @return string
     */
    private function removeUnusedNamespaces(RssInterface $rss, string $xml): string
    {
        if (is_null($rss->getChannel()->getIcon())) {
            $namespacePrefixToRemove = "webfeeds";
            // Usar expresión regular para eliminar el atributo de namespace específico
            $namespaceAttrPattern = '/xmlns:' . preg_quote($namespacePrefixToRemove, '/') . '="[^"]*"/';
            $xml = preg_replace($namespaceAttrPattern, '', $xml);
        }
        return $xml;
    }
}
