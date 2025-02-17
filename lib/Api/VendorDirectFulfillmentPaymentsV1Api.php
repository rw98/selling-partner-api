<?php
/**
 * VendorDirectFulfillmentPaymentsV1Api
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Payments
 *
 * The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.
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
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SellingPartnerApi\ApiException;
use SellingPartnerApi\Configuration;
use SellingPartnerApi\HeaderSelector;
use SellingPartnerApi\Middlewares\TelescopeMiddleware;
use SellingPartnerApi\ObjectSerializer;

/**
 * VendorDirectFulfillmentPaymentsV1Api Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 */
class VendorDirectFulfillmentPaymentsV1Api
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
     * Operation submitInvoice
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceRequest $body body (required)
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse
     * @throws \InvalidArgumentException
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     */
    public function submitInvoice($body)
    {
        $response = $this->submitInvoiceWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation submitInvoiceWithHttpInfo
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceRequest $body (required)
     *
     * @return array of \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws \InvalidArgumentException
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     */
    public function submitInvoiceWithHttpInfo($body)
    {
        $request = $this->submitInvoiceRequest($body);
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
            switch ($statusCode) {
                case 202:
                    if ('\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse', $response->getHeaders());
                case 400:
                    if ('\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse', $response->getHeaders());
                case 403:
                    if ('\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse', $response->getHeaders());
                case 404:
                    if ('\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse', $response->getHeaders());
                case 413:
                    if ('\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse', $response->getHeaders());
                case 415:
                    if ('\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse', $response->getHeaders());
                case 429:
                    if ('\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse', $response->getHeaders());
                case 500:
                    if ('\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse', $response->getHeaders());
                case 503:
                    if ('\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string)$responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse', $response->getHeaders());
            }

            $returnType = '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string)$responseBody;
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation submitInvoiceAsync
     *
     *
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceRequest $body (required)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \InvalidArgumentException
     */
    public function submitInvoiceAsync($body)
    {
        return $this->submitInvoiceAsyncWithHttpInfo($body);;
    }

    /**
     * Operation submitInvoiceAsyncWithHttpInfo
     *
     *
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceRequest $body (required)
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @throws \InvalidArgumentException
     */
    public function submitInvoiceAsyncWithHttpInfo($body)
    {
        $returnType = '\SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceResponse';
        $request = $this->submitInvoiceRequest($body);
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
     * Create request for operation 'submitInvoice'
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentPaymentsV1\SubmitInvoiceRequest $body (required)
     *
     * @return \GuzzleHttp\Psr7\Request
     * @throws \InvalidArgumentException
     */
    public function submitInvoiceRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling submitInvoice'
            );
        }

        $resourcePath = '/vendor/directFulfillment/payments/v1/invoices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (count($formParams) > 0) {
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
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
    protected function createHttpClientOption()
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
