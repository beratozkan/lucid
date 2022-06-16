<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class RegController extends Controller
{

    public $client,$host;

    public function CreateClient($host){
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => $host,
            // You can set any number of default request options.
            
        ]);
        $this->host = $host;
    }

    public function GetMethod($path){
        $url = $host.$path;
        $response = $this->client();
    }
}
