<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;


class ReservationController extends Controller
{
    /**
     * @throws GuzzleException
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'service' => $request->service,
            'date' => $request->date,
            'time' => $request->time,
            'message' => $request->message,
        ];

        // HTTP POST request to Odoo API
        $client = new Client();
        $url = env('URL_ODOO');
        $response = $client->post($url, [
            'json' => $data,
        ]);
        // Handle the API response if needed
        $responseBody = $response->getBody()->getContents();
        return response()->json($responseBody);
    }
}
