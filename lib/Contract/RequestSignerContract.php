<?php

namespace AmazonBusinessApi\Contract;

use Psr\Http\Message\RequestInterface;

interface RequestSignerContract
{
    public function signRequest(RequestInterface $request): RequestInterface;
}