<?php

namespace App\Utility;

// For documentation on the Browzer Engage API see more here: https://engage.browzer.co.uk/docs/api/v1/public

class BrowzerAPI
{
    public function getURL()
    {
        return config('app.api_endpoint');
    }

    public function callAPI()
    {
        // Handle calling Browzer API here.
    }
}
