<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //test1
    public function test1()
    {
        $key='1905';
        $info='13366737021';
        $data=md5($info.$key);
        print_r($data);
        $url='http://pwdtest.com/check1?data='.$data;
        $response=file_get_contents($url);
        print_r($response);
    }
    //test2
    public function test2()
    {
        $key='120';
        
    }
}
