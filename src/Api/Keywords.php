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

class Keywords extends AbstractApi
{
    public function create(array $parameters)
    {
        return $this->send('addkeyword', $parameters);
    }

    public function destroy(array $parameters)
    {
        return $this->send('delkeyword', $parameters);
    }
}
