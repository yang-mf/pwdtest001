<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    //check1
    public function check1()
    {
        $key='1905';
        $info='13366737021';
        $new_info=md5($info.$key);
        echo 22;
        $data=$_GET['data'];
//        print_r($data);die;
        if($data==$new_info){
            $response=[
                'num'=>40000,
                'info'=>'success'
            ];
            return $response;
        }else{
            $response=[
                'num'=>40003,
                'info'=>'wrong'
            ];
            return $response;
        }

    }
}
