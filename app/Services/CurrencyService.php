<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class CurrencyService
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('CURRENCY_API_KEY'); // Load API key from environment
        $this->baseUrl = 'https://api.exchangerate-api.com/v4/latest/'; // Base URL for fetching rates
    }

    public function getExchangeRates()
    {
        try {
            // Make the request using the base URL and append the base currency (NGN)
            $response = $this->client->get($this->baseUrl . 'NGN?access_key=' . $this->apiKey);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            // Handle the error as needed
            return ['error' => 'Unable to fetch exchange rates.'];
        }
    }
}
