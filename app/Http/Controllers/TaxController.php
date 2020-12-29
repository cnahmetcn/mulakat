<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SoapClient;

class TaxController extends Controller
{
    public function index()
    {
        return view('taxcontrol');
    }

    public function check(Request $request)
    {
        $countryCode = $request->get('memberStateCode');
        $code = $request->get('vat_number');

        $client = new SoapClient("http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl");
        $result = $client->checkVat(['countryCode' => $countryCode, 'vatNumber' => $code]);
        if($result->valid == true) {
            return "VAT code #".$code." is invalid.";
        } else {
           return "VAT code #".$code." is valid.";
        }
    }
}
