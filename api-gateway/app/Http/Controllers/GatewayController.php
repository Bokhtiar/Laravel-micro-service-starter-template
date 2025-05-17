<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GatewayController extends Controller
{
    public function forwardAdmin(Request $request, $any)
    {
        $serviceUrl = 'http://admin-service:8000/' . $any;

        return $this->forwardRequest($request, $serviceUrl);
    }

    public function forwardVendor(Request $request, $any)
    {
        $serviceUrl = 'http://vendor-service:8000/' . $any;

        return $this->forwardRequest($request, $serviceUrl);
    }

    private function forwardRequest(Request $request, string $url)
    {
        $method = strtolower($request->method());

        $response = Http::$method($url, $request->all());

        return response($response->body(), $response->status())
            ->withHeaders($response->headers());
    }
}
