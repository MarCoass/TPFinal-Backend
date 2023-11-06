<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class SoapController extends Controller
{
    public function consume($tips, $cantNecesaria)
    {
        $client = new Client();
        $headers = [
            'Content-Type' => 'text/xml; charset=utf-8',
            'SOAPAction' => 'http://tempuri.org/Divide'
        ];
        $body = '<?xml version="1.0" encoding="utf-8"?>
        <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
          <soap:Body>
            <Divide xmlns="http://tempuri.org/">
              <intA>'.$tips.'</intA>
              <intB>'.$cantNecesaria.'</intB>
            </Divide>
          </soap:Body>
        </soap:Envelope>';
        $request = new Request('POST', 'http://www.dneonline.com/calculator.asmx', $headers, $body);
        $res = $client->sendAsync($request)->wait();
        echo $res->getBody();
    }
}
