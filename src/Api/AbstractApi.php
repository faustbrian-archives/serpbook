<?php

/*
 * This file is part of SerpBook PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SerpBook\Api;

use BrianFaust\Unified\AbstractApi as BaseApi;

abstract class AbstractApi extends BaseApi
{
    protected function send($viewkey, array $parameters = [])
    {
        $this->setQuery(array_merge(compact('viewkey'), $parameters));

        return $this->get();
    }
}
