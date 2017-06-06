<?php

/*
 * This file is part of SerpBook PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SerpBook;

use BrianFaust\Unified\AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider
{
    protected function getHttpClient()
    {
        return HttpClient::class;
    }

    protected function getIdentifier()
    {
        return 'faustbrian.serpbook';
    }
}
