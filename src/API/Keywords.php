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

namespace Plients\SerpBook\API;

use Plients\Http\HttpResponse;

class Keywords extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function create(array $parameters): HttpResponse
    {
        return $this->send('addkeyword', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function destroy(array $parameters): HttpResponse
    {
        return $this->send('delkeyword', $parameters);
    }
}
