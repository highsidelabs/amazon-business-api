<?php

namespace AmazonBusinessApi\Contract;

use GuzzleHttp\Psr7\Request;

interface RequestSignerContract
{
    public function signRequest(Request $request): Request;
}