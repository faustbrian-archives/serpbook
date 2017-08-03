<?php

declare(strict_types=1);

/*
 * This file is part of SerpBook PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SerpBook\API;

use BrianFaust\Http\HttpResponse;

class Categories extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function all(): HttpResponse
    {
        return $this->send('getcategories');
    }

    /**
     * @param string $category
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function single(string $category): HttpResponse
    {
        return $this->send('getsinglecategory', compact('category'));
    }

    /**
     * @param string $viewKey
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function details(string $viewKey, array $parameters): HttpResponse
    {
        return $this->send($viewKey, $parameters);
    }
}
