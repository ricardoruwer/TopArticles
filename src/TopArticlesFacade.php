<?php

namespace Ruwer\TopArticles;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Collective\Remote\RemoteManager
 * @see \Collective\Remote\Connection
 */
class TopArticlesFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'toparticles';
    }
}
