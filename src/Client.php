<?php


namespace Soen\Http\Client;


use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Soen\Http\Message\Response;

class Client implements ClientInterface
{
    public $response;
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function sendRequest()
    {
    }

}