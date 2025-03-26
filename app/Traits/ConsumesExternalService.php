<?php
namespace App\Traits;

// Include the Guzzle Component Library
use GuzzleHttp\Client;

trait ConsumesExternalService
{
    /**
     * Send a request to any service
     * @return string
     */
    // Note: form params and headers are optional
    public function performRequest($method, $requestUrl, $form_params = [], $headers = [])
    {
        // Create a new client request
        $client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        // Perform the request (method, url, form parameters, headers)
        $response = $client->request($method, $requestUrl, [
            'form_params' => $form_params,
            'headers' => $headers
        ]);

        // Return the response body contents
        return $response->getBody()->getContents();
    }
}