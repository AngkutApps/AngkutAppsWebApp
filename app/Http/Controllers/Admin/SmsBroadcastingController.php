<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Alert;

class SmsBroadcastingController extends Controller
{
    public function index()
    {
        return view('admin.smsbroadcasting.index');
    }

    public function sendSms(Request $request)
    {
        $data = [
            'msisdns' => $request->phonenum,
            'text' => $request->text
        ];

        $client = new \GuzzleHttp\Client([
            'debug' => fopen('php://stderr', 'w'),
            'verify' => false
        ]);
        $URI = 'https://api.thebigbox.id/sms-broadcast/1.0.0/send';
        $params['headers'] = ['Content-Type' => 'application/json', 'x-api-key' => 'b4emnOXwXDdGSeTZH2DcHKqhHCXCFSqI'];
        $params['body'] = json_encode($data);
        $response = $client->post($URI, $params);
        $json = $response->getBody()->getContents();
        alert()->success('Sukses', 'Berhasil Mengirim Pesan');
        return redirect()->back();
    }
}
