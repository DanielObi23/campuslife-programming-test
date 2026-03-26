<?php

namespace App\Utility;

use Illuminate\Support\Facades\Http;

class BrowzerAPI
{
    public function getURL()
    {
        return config('app.api_endpoint');
    }

    public function callAPI($endpoint)
    {
        return Http::withoutVerifying() // SSL error on my windows pc
            ->withHeaders([
                'API-Token' => config('app.api_token')
            ])
            ->get($this->getURL() . $endpoint)
            ->json();
    }

    public function getStories()
    {
        return $this->callAPI('/stories');
    }

    public function getEvents()
    {
        return $this->callAPI('/events');
    }

    public function getOrganisation()
    {
        return $this->callAPI('/organisation');
    }
}