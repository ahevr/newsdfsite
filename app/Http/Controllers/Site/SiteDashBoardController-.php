<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Helper\urlHelper;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class SiteDashBoardController extends Controller
{

    public function index(){

//
//        $trendyol =  urlHelper::api();
//
////          Ürün Listesi
//
//        $r = $trendyol->product->filterProducts(['size' => 3000,'approved' => true]);
//
//        $x = collect(($r))->collapse()->paginate(18);
//
//        dd($x);
//
//        return view("welcome")->with("trendyol",$trendyol)->with("x",$x);


        $url = 'https://api.trendyol.com/sapigw/suppliers/105316/products?approved=true&size=3000';
        $response    = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept'        => 'application/json',
        ])
            ->withBasicAuth('nuA5AsWFcHuMyTdzzgGX', 'WygwQ0FdzuqwjntdNwF6')
            ->get($url);

        $info = json_decode($response->getBody()->getContents(), true);

        $x = collect($info)->collapse()->paginate(18);

        return view("welcome")->with("x",$x);






    }

    public function productDetails($id){

        $trendyol =  urlHelper::api();

        $r = $trendyol->product->filterProducts(['size' => 3000,'approved' => true]);

        $x = collect(($r))->collapse()->where("id",$id)->first();

        return view("edit")->with("trendyol",$trendyol)->with("x",$x);

    }

    public function productUpdate(Request $request){


                            //           ??TRENDYOL APİ          //


//******************************************************************************************************************************************************************************
             // !TRENDYOL UPDATE SONRASI REQUEST ID İLE İŞLEM SONUCUNU KONTROL ETME
//******************************************************************************************************************************************************************************


//        $trendyol =  urlHelper::api();
//        $r = $trendyol->product->getBatchRequestResult("0c290723-7085-11ed-91c4-4a6a9dc01106-1669809625");
//        dd($r);



//******************************************************************************************************************************************************************************
             // !TRENDYOL ÜRÜN ÇEKME PURE PHP
//******************************************************************************************************************************************************************************

//
//        $url = "https://api.trendyol.com/sapigw/suppliers/105316/products?approved=true&size=50";
//
//        $connect = curl_init($url);
//
//        curl_setopt($connect,CURLOPT_URL,$url);
//        curl_setopt($connect,CURLOPT_RETURNTRANSFER,1);
//        curl_setopt($connect,CURLOPT_USERPWD,'nuA5AsWFcHuMyTdzzgGX:WygwQ0FdzuqwjntdNwF6');
//
//        $response = curl_exec($connect);
//        curl_close($connect);
//
//        $json = json_decode($response);
//
//        echo "<pre>";
//
//        print_r($json);

//******************************************************************************************************************************************************************************
            // !TRENDYOL ÜRÜN ÇEKME LARAVEL(OLD)
//******************************************************************************************************************************************************************************

//        $client = new Client();
//        $url = "https://api.trendyol.com/sapigw/suppliers/105316/products?approved=true&size=50";
//        $credentials = base64_encode('nuA5AsWFcHuMyTdzzgGX:WygwQ0FdzuqwjntdNwF6');
//        $headers = [
//            'Content-type'  => 'application/json; charset=utf-8',
//            'Accept'        => 'application/json',
//            'Authorization' => 'Basic ' . $credentials,
//        ];
//        $response       = $client->request('GET', $url, [
//            'headers'   => $headers
//        ]);
//        $info               = json_decode($response->getBody()->getContents(), true);
//
//        $x = collect(($info))->collapse()->paginate(18);
//
//        dd($x) ;

//******************************************************************************************************************************************************************************
           // !TRENDYOL ÜRÜN ÇEKME LARAVEL(NEW)
//******************************************************************************************************************************************************************************

//        $url = 'https://api.trendyol.com/sapigw/suppliers/105316/products?approved=true&size=50';
//        $response    = Http::withHeaders([
//            'Content-Type' => 'application/json',
//            'Accept'        => 'application/json',
//        ])
//            ->withBasicAuth('nuA5AsWFcHuMyTdzzgGX', 'WygwQ0FdzuqwjntdNwF6')
//            ->get($url);
//
//        $info = json_decode($response->getBody()->getContents(), true);
//        dd($info) ;

//******************************************************************************************************************************************************************************
          //   !TRENDYOL ÜRÜN GÜNCELLEME-FYT LARAVEL(NEW)
//******************************************************************************************************************************************************************************

        $url = 'https://api.trendyol.com/sapigw/suppliers/105316/products/price-and-inventory';
        $response    = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept'        => 'application/json',
        ])
            ->withBasicAuth('nuA5AsWFcHuMyTdzzgGX', 'WygwQ0FdzuqwjntdNwF6')
            ->post($url,[
                'items'=> [
                    [
                        'barcode'   => $request->barcode,
                        'quantity'  => $request->quantity,
                        'salePrice' => $request->salePrice,
                        'listPrice' => $request->listPrice,
//                        'barcode'   => "8698915744410",
//                        'quantity'  => 12,
//                        'salePrice' => 2120,
//                        'listPrice' => 2699,
                    ],
                ],
            ]);

        $info = json_decode($response->getBody()->getContents(), true);
        dd($info) ;


//******************************************************************************************************************************************************************************


                                            //           ??HEPSİBURADA APİ          //
//******************************************************************************************************************************************************************************
           // !HEPSİBURADA ÜRÜN ÇEKME LARAVEL
//******************************************************************************************************************************************************************************

//        $client = new Client();
//        $url = "https://mpop.hepsiburada.com/product/api/categories/get-all-categories?leaf=true&status=ACTIVE&available=true&page=0&size=1000&version=1";
//        $credentials = base64_encode('egesedef_dev:vwDazSnUVexQ!');
//        $headers = [
//            'Content-type'  => 'application/json; charset=utf-8',
//            'Accept'        => 'application/json',
//            'Authorization' => 'Basic ' . $credentials,
//        ];
//        $response       = $client->request('GET', $url, [
//            'headers'   => $headers
//        ]);
//        $info               = json_decode($response->getBody()->getContents(), true);
//
//        $x = collect(($info))->collapse();
//
//        dd($x) ;

//******************************************************************************************************************************************************************************
        //   !HEPSİBURADA TAMAMLANAN SİP ÇEKME LARAVEL
//******************************************************************************************************************************************************************************

//        $client = new Client();
//        $url = "https://oms-external.hepsiburada.com/packages/merchantid/6359ad21-5ab1-4b63-9575-f80e09d0de86/delivered?offset=0&limit=40";
//        $credentials = base64_encode('egesedef_dev:vwDazSnUVexQ!');
//        $headers = [
//            'Content-type'  => 'application/json; charset=utf-8',
//            'Accept'        => 'application/json',
//            'Authorization' => 'Basic ' . $credentials,
//        ];
//        $response       = $client->request('GET', $url, [
//            'headers'   => $headers
//        ]);
//        $info               = json_decode($response->getBody()->getContents(), true);
//
//        $x = collect(($info))->collapse();
//
//        dd($x) ;

//******************************************************************************************************************************************************************************
        //   !HEPSİBURADA TAMAMLANAN SİP DETAYI ÇEKME LARAVEL
//******************************************************************************************************************************************************************************

//        $client = new Client();
//        $url = "https://oms-external.hepsiburada.com/orders/merchantid/6359ad21-5ab1-4b63-9575-f80e09d0de86/ordernumber/0881379327";
//        $credentials = base64_encode('egesedef_dev:vwDazSnUVexQ!');
//        $headers = [
//            'Content-type'  => 'application/json; charset=utf-8',
//            'Accept'        => 'application/json',
//            'Authorization' => 'Basic ' . $credentials,
//        ];
//        $response       = $client->request('GET', $url, [
//            'headers'   => $headers
//        ]);
//        $info               = json_decode($response->getBody()->getContents(), true);
//
//        $x = collect(($info))->collapse();
//
//        dd($x) ;


//******************************************************************************************************************************************************************************
        //   !HEPSİBURADA PAKETLİ SİP ÇEKME LARAVEL
//******************************************************************************************************************************************************************************

//        $client = new Client();
//        $url = "https://oms-external.hepsiburada.com/orders/merchantid/6359ad21-5ab1-4b63-9575-f80e09d0de86?offset=0&limit=100";
//        $credentials = base64_encode('egesedef_dev:vwDazSnUVexQ!');
//        $headers = [
//            'Content-type'  => 'application/json; charset=utf-8',
//            'Accept'        => 'application/json',
//            'Authorization' => 'Basic ' . $credentials,
//        ];
//        $response       = $client->request('GET', $url, [
//            'headers'   => $headers
//        ]);
//        $info               = json_decode($response->getBody()->getContents(), true);
//
//        $x = collect(($info))->collapse();
//
//        dd($x) ;

//******************************************************************************************************************************************************************************
        //   !HEPSİBURADA STOK GÜNCELLEME LARAVEL
//******************************************************************************************************************************************************************************

//        $client = new Client();
//        $url = "https://listing-external-sit.hepsiburada.com/listings/merchantid/71e62da3-e3c7-44e9-87be-1f3d281d1487/stock-uploads";
//        $credentials = base64_encode('egesedef_dev:Hb12345!');
//        $headers = [
//            'Content-type'  => 'application/json; charset=utf-8',
//            'Accept'        => 'application/json',
//            'Authorization' => 'Basic ' . $credentials,
//        ];
//        // BURADA POST İŞLEMİ YAPILMASI GEREKİYOR.
//        $response       = $client->request('POST', $url, [
//            'headers'   => $headers,
//            'multipart' => [
//                'HepsiburadaSku' => "HBV0000104HI3",
//                'MerchantSku' => "HBV0000104HI3_TEST",
//                'AvailableStock' => 2120,
//            ],
//        ]);
//        $info               = json_decode($response->getBody()->getContents(), true);
//
//        $x = collect(($info))->collapse();
//
//        dd($x) ;

//******************************************************************************************************************************************************************************
        //   !HEPSİBURADA FİYAT GÜNCELLEME LARAVEL
//******************************************************************************************************************************************************************************

//        $client = new Client();
//        $url = "https://listing-external.hepsiburada.com/listings/merchantid/71e62da3-e3c7-44e9-87be-1f3d281d1487/price-uploads";
//        $credentials = base64_encode('egesedef_dev:vwDazSnUVexQ!');
//        $headers = [
//            'Content-type'  => 'application/json; charset=utf-8',
//            'Accept'        => 'application/json',
//            'Authorization' => 'Basic ' . $credentials,
//        ];
//        // BURADA POST İŞLEMİ YAPILMASI GEREKİYOR.
//        $response       = $client->request('GET', $url, [
//            'headers'   => $headers
//        ]);
//        $info               = json_decode($response->getBody()->getContents(), true);
//
//        $x = collect(($info))->collapse();
//
//        dd($x) ;


    }

}

