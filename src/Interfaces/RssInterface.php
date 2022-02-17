<?php
/**
 * Copyright 2021 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\BBNX\Rss\Interfaces;

use Bitban\BBNX\Rss\Entities\Channel;

interface RssInterface
{
    public function getVersion(): ?string;

    public function setVersion(?string $version): RssInterface;

    public function getChannel(): ?Channel;

    public function setChannel(?Channel $channel): RssInterface;

    public static function make();
}
