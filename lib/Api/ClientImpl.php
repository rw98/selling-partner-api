<?php

namespace SellingPartnerApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\HeaderSelector;
use SellingPartnerApi\Middlewares\TelescopeMiddleware;

class ClientImpl
{
    /**
     * @param ClientInterface|null $client
     * @param Configuration $config
     * @param HeaderSelector|null $selector
     * @param int $hostIndex
     * @return array
     */
    public static function getClient(?ClientInterface $client, Configuration $config, ?HeaderSelector $selector, int $hostIndex)
    {
        $client = self::getClientWitHandlerStack($client);
        $selector = $selector ?: new HeaderSelector($config);
        return [$client, $config, $selector, $hostIndex];
    }

    /**
     * @param ClientInterface|null $client
     * @return Client|ClientInterface
     */
    public static function getClientWitHandlerStack(?ClientInterface $client): ClientInterface|Client
    {
        $stack = HandlerStack::create();
        $stack->push(new TelescopeMiddleware());
        return $client ?: new Client([
            "handler" => $stack
        ]);
    }
}
