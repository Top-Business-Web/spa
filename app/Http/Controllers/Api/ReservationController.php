<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Carbon\Carbon;
use GuzzleHttp\Exception\ClientException;
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
        $formateDate = Carbon::parse($request->date)->format('Y-m-d H:i:s');
        $data['date'] = Carbon::parse($formateDate)->addHours(-3)->format('Y-m-d H:i:s');


        $client = new Client();
        $baseUrl = env('URL_ODOO');

        // login odoo client
        $sessionId = $client->post($baseUrl . '/web/session/authenticate', [
            'json' => [
                'params' => [
                    "db" => "traning",
                    "login" => "admin",
                    "password" => "admin"
                ]
            ],
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ]);
        // Process successful response here
        $sessionCookie = $sessionId->getHeader('Set-Cookie');

        // Extract the session ID from the cookie
        $sessionId = ''; // Initialize a variable to store the session ID
        foreach ($sessionCookie as $cookie) {
            if (strpos($cookie, 'session_id') !== false) {
                preg_match('/session_id=(.*?);/', $cookie, $matches);
                $sessionId = $matches[1];
                break;
            }
        }

        // Create partner
        $clientId = $client->post($baseUrl . '/api/res.partner/', [
            'json' => [
                'params' => [
                    'data' => [
                        "name" => $data['name'],
                        "mobile" => $data['phone'],
                        "street" => $data['address'],
                        "country_id" => "2"
                    ]
                ]
            ],
            'headers' => [
                'Cookie' => 'session_id=' . $sessionId,
                'Content-Type' => 'application/json',
                'Accept' => '*/*'
            ]
        ]);

        $clientId = json_decode($clientId->getBody()->getContents(), true);
        $clientId = $clientId['result'];

        // Create partner
        $createBook = $client->post($baseUrl . '/api/salon.booking/', [
            'json' => [
                'params' => [
                    'data' => [
                        "name" => $data['name'],
                        "phone" => $data['phone'],
                        "service_ids" => [$data['service']],
                        "time" => $data['date'],
                        "chair_id" => false
                    ]
                ]
            ],
            'headers' => [
                'Cookie' => 'session_id=' . $sessionId,
                'Content-Type' => 'application/json',
                'Accept' => '*/*'
            ]
        ]);

        $createBook = json_decode($createBook->getBody()->getContents(), true);

        dd($createBook);

    }
}
