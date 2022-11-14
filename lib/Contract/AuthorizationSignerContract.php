<?php

namespace AmazonBusinessApi\Contract;

use AmazonBusinessApi\Credentials;
use GuzzleHttp\Psr7\Request;

interface AuthorizationSignerContract
{
    public function sign(Request $request, Credentials $credentials): Request;

    public function setRequestTime(?\DateTime $datetime = null): void;

    public function formattedRequestTime(?bool $withTime = true): ?string;
}