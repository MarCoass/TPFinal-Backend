<?php

namespace App\Http\Controllers;

use DOMDocument;
use DOMXPath;
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
                      <intA>' . $tips . '</intA>
                      <intB>' . $cantNecesaria . '</intB>
                  </Divide>
              </soap:Body>
          </soap:Envelope>';
    $request = new Request('POST', 'http://www.dneonline.com/calculator.asmx', $headers, $body);
    $res = $client->sendAsync($request)->wait();

    // Crear un objeto DOMDocument y cargar la respuesta SOAP
    $dom = new DOMDocument();
    $dom->loadXML($res->getBody());

    // Utilizar XPath para acceder al valor de DivideResult
    $xpath = new DOMXPath($dom);
    $xpath->registerNamespace('soap', 'http://schemas.xmlsoap.org/soap/envelope/');
    $xpath->registerNamespace('ns', 'http://tempuri.org/');

    // Obtener el valor de DivideResult
    $divideResult = $xpath->query('//ns:DivideResult')->item(0)->textContent;

    // Ahora $divideResult contiene el valor de DivideResult
    return $divideResult;
  }
}
