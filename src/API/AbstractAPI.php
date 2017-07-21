<?php

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
use BrianFaust\Http\PendingHttpRequest;

abstract class AbstractAPI
{
    /**
     * @var \BrianFaust\Http\PendingHttpRequest
     */
    protected $client;

    /**
     * Create a new API class instance.
     *
     * @param \BrianFaust\Http\PendingHttpRequest $client
     */
    public function __construct(PendingHttpRequest $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $viewkey
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse;
     */
    protected function send(string $viewkey, array $parameters = []): HttpResponse
    {
        return $this->client->get('/', compact('viewkey') + $parameters);
    }
}
