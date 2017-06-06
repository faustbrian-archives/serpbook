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

class Categories extends AbstractApi
{
    public function all()
    {
        return $this->send('getcategories');
    }

    public function single($category)
    {
        return $this->send('getsinglecategory', compact('category'));
    }

    public function details($viewKey, array $parameters)
    {
        return $this->send($viewKey, $parameters);
    }
}
