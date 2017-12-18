<?php
namespace App\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\Log;


class HttpRequest
{
    protected $url;
    /**
     * HttpRequest constructor.
     */
    public function __construct()
    {
    }

    public static function get($url , $credentials = null , $prams = null ) {

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', $url , [
            'auth' => $credentials
        ]);

        $result = $response->getBody()->getContents();

        $retData = [];
        if (!empty($result)) {
            $apiInvt = json_decode($result, true);
            $retData = $apiInvt;
        }
        return $retData;
    }

    public static function post($url ,$credentials=null ,$data) {

        $client = new \GuzzleHttp\Client();
        try {
            $response = $client->post($url, [
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode($data),
                'auth' => [$credentials->key, $credentials->value],
            ]);

            return  json_decode($response->getBody()->getContents() , true);

        } catch (\HttpException $ex) {
            Log::info($ex->getMessage() . $ex->getLine() . $ex->getFile());
        }

    }

    public static function put($url , $credentials = null , $data) {


        $client = new \GuzzleHttp\Client();

        try {

            $response = $client->put($url, [
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode($data),
                'auth' => [$credentials->key, $credentials->value],

                'Authorization' => ['Basic '.$credentials]
            ]);

            return  json_decode($response->getBody()->getContents());

        } catch (\HttpException $ex) {
            Log::info($ex->getMessage() . $ex->getLine() . $ex->getFile());
            return false;
        }
    }

    public static function delete($url ,$credentials){
        try {

            $client = new \GuzzleHttp\Client();
            $response = $client->delete($url, [
                'auth' => $credentials,
            ]);

            return \GuzzleHttp\json_decode($response->getBody()->getContents() , true);
        } catch (\HttpException $ex) {
            Log::info($ex->getMessage() . $ex->getLine() . $ex->getFile());
            return false;
        }
    }

}