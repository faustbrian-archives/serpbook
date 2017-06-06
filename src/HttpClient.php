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

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\SerpBook\Request\Modifiers\AuthenticationModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://serpbook.com/serp/api/',
        'headers' => [
           'User-Agent' => 'SerpBook-PHP-Client/0.1.0',
        ],
        'verify' => false,
    ];

    protected $requestModifiers = [
        AuthenticationModifier::class,
    ];
}
