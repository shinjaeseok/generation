<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private function get($url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        //curl_setopt($ch,CURLOPT_POST, 1);
        //curl_setopt($ch,CURLOPT_POSTFIELDS, $input);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
        curl_setopt($ch,CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);

        return $response;

    }

    public function getLastLottoNumber(Request $request) {

        $url = 'https://www.dhlottery.co.kr/common.do?method=getLottoNumber&drwNo=1022';

        $result = json_decode($this->get($url));

        $num_arr = [
            $result->drwtNo1,
            $result->drwtNo2,
            $result->drwtNo3,
            $result->drwtNo4,
            $result->drwtNo5,
            $result->drwtNo6,
        ];

        $num_color = [];
        foreach ($num_arr as $item => $val) {
            if ($val <= 10 ) {
                $num_color[] = 'bg-warning';
            } else if ($val <= 20) {
                $num_color[] = 'bg-info';
            }else if ($val <= 30) {
                $num_color[] = 'bg-danger';
            }else if ($val <= 40) {
                $num_color[] = 'bg-secondary';
            }else if ($val <= 50) {
                $num_color[] = 'bg-success';
            }
        }

        $result->num_color = $num_color;

        return $result;
    }
}


