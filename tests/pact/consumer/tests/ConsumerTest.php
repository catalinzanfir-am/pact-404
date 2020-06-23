<?php

use GuzzleHttp\Client;
use PhpPact\Consumer\InteractionBuilder;
use PhpPact\Consumer\Model\ConsumerRequest;
use PhpPact\Consumer\Model\ProviderResponse;
use PhpPact\Standalone\MockService\MockServerEnvConfig;
use PHPUnit\Framework\TestCase;


class ConsumerTest extends TestCase
{

    public function test404()
    {
        $url = "/v1/customers/1";

        $request = new ConsumerRequest();
        $request
            ->setMethod('GET')
            ->setPath($url);


        $response = new ProviderResponse();
        $response
            ->setStatus(404)
            ->setBody([
                "error" => [
                    "code" => 404,
                    "message" => "not found",
                    "errors"  => [ "not found" ],
                    "error_code" => null
                ]
            ]);

        $config = new MockServerEnvConfig();

        $builder = new InteractionBuilder($config);
        $result= $builder
            ->given("Given the user with id '1' does not exist")
            ->uponReceiving("and when the request 'v1/customers/1' is made:")
            ->with($request)
            ->willRespondWith($response);

        $client = new Client(["base_uri" => $config->getBaseUri()]);
        $client->get($url);
        $this->assertTrue($result);
    }
}