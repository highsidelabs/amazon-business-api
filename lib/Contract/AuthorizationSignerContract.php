<?php

namespace AmazonBusinessApi\Contract;

use AmazonBusinessApi\Credentials;
use Psr\Http\Message\RequestInterface;

interface AuthorizationSignerContract
{
    public function sign(RequestInterface $request, Credentials $credentials): RequestInterface;

    public function setRequestTime(?\DateTime $datetime = null): void;

    public function formattedRequestTime(?bool $withTime = true): ?string;
}