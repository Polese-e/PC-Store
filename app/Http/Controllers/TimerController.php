<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimerController extends Controller
{
    public function getTime()
    {
        $endTime = strtotime('2024-08-22 00:00:00');
        $currentTime = time();
        $timeLeft = $endTime - $currentTime;

        return response()->json(['timeLeft' => $timeLeft]);
    }
}
