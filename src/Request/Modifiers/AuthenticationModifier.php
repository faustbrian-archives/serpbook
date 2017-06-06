<?php

/*
 * This file is part of SerpBook PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SerpBook\Request\Modifiers;

use BrianFaust\Contracts\HttpClient;
use BrianFaust\Modifiers\AbstractModifier;

class AuthenticationModifier extends AbstractModifier
{
    public function apply()
    {
        $key = $this->httpClient->getConfig('key');
        $this->httpClient->addQuery('auth', $key);

        $email = $this->httpClient->getConfig('email');
        $this->httpClient->addQuery('e', $email);

        return $this->httpClient;
    }
}
