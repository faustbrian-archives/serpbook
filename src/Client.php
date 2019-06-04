<?php

declare(strict_types=1);

/*
 * This file is part of SerpBook PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\SerpBook;

use Plients\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $email;

    /**
     * Create a new client instance.
     *
     * @param string $key
     * @param string $email
     */
    public function __construct(string $key, string $email)
    {
        $this->key = $key;
        $this->email = $email;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\SerpBook\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("https://serpbook.com/serp/api/?auth={$this->key}&e={$this->email}");

        $class = "Plients\\SerpBook\\API\\{$name}";

        return new $class($client);
    }
}
