<?php
/**
 * SellersV1Api
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Sellers
 *
 * The Selling Partner API for Sellers lets you retrieve information on behalf of sellers about their seller account, such as the marketplaces they participate in. Along with listing the marketplaces that a seller can sell in, the API also provides additional information about the marketplace such as the default language and the default currency. The API also provides seller-specific information such as whether the seller has suspended listings in that marketplace.
 *
 * The version of the OpenAPI document: v1
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use InvalidArgumentException;
use SellingPartnerApi\ApiException;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\HeaderSelector;
use SellingPartnerApi\Middlewares\TelescopeMiddleware;
use SellingPartnerApi\ObjectSerializer;

/**
 * SellersV1Api Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 */
class SellersV1Api
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param Configuration $config
     * @param ClientInterface $client
     * @param HeaderSelector $selector
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration   $config,
        ClientInterface $client = null,
        HeaderSelector  $selector = null,
                        $hostIndex = 0
    )
    {
        list ($this->client, $this->config, $this->headerSelector, $this->hostIndex) = ClientImpl::getClient($client, $config, $selector, $hostIndex);
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getMarketplaceParticipations
     *
     *
     * @return \SellingPartnerApi\Model\SellersV1\GetMarketplaceParticipationsResponse
     * @throws InvalidArgumentException
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     */
    public function getMarketplaceParticipations()
    {
        $response = $this->getMarketplaceParticipationsWithHttpInfo();
        return $response;
    }

    /**
     * Operation getMarketplaceParticipationsWithHttpInfo
     *
     *
     * @return array of \SellingPartnerApi\Model\SellersV1\GetMarketplaceParticipationsResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws InvalidArgumentException
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     */
    public function getMarketplaceParticipationsWithHttpInfo()
    {
        $request = $this->getMarketplaceParticipationsRequest();
        $signedRequest = $this->config->signRequest(
            $request
        );


        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string)($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : [],
                    $body
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            if ($statusCode == 200) {
                if ('\SellingPartnerApi\Model\SellersV1\GetMarketplaceParticipationsResponse' === '\SplFileObject') {
                    $content = $responseBody; //stream goes to serializer
                } else {
                    $content = (string)$responseBody;
                }
                return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\SellersV1\GetMarketplaceParticipationsResponse', $response->getHeaders());
            }

            $returnType = '\SellingPartnerApi\Model\SellersV1\GetMarketplaceParticipationsResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string)$responseBody;
            }
            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());

        } catch (ApiException $e) {
            $data = ObjectSerializer::deserialize(
                $e->getResponseBody(),
                '\SellingPartnerApi\Model\SellersV1\GetMarketplaceParticipationsResponse',
                $e->getResponseHeaders()
            );
            $e->setResponseObject($data);
            throw $e;
        }
    }

    /**
     * Operation getMarketplaceParticipationsAsync
     *
     *
     *
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getMarketplaceParticipationsAsync()
    {
        return $this->getMarketplaceParticipationsAsyncWithHttpInfo();;
    }

    /**
     * Operation getMarketplaceParticipationsAsyncWithHttpInfo
     *
     *
     *
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws InvalidArgumentException
     */
    public function getMarketplaceParticipationsAsyncWithHttpInfo()
    {
        $returnType = '\SellingPartnerApi\Model\SellersV1\GetMarketplaceParticipationsResponse';
        $request = $this->getMarketplaceParticipationsRequest();
        $signedRequest = $this->config->signRequest(
            $request
        );
        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string)($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $hasResponse ? $response->getHeaders() : [],
                        $body
                    );
                }
            );
    }

    /**
     * Create request for operation 'getMarketplaceParticipations'
     *
     *
     * @return Request
     * @throws InvalidArgumentException
     */
    public function getMarketplaceParticipationsRequest(): Request
    {

        $resourcePath = '/sellers/v1/marketplaceParticipations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'payload']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'payload'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @return array of http client options
     * @throws \RuntimeException on file opening failure
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
