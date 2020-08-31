<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

use Illuminate\Http\Request;

class RedisController extends Controller
{
    //

    public function check_redis_connection()
    {
        try {
            $redis=Redis::connect();
            return true;
        } catch(\Predis\Connection\ConnectionException $e){
            return false;
        }
    }
}


