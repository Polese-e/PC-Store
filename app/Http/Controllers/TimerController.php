<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Timer;
use Illuminate\Http\Request;

class TimerController extends Controller
{
    public function getTime()
    {
        $timer = Timer::latest()->first();

        if (!$timer) {
            return response()->json(['error' => 'Temporizador não encontrado'], 404);
        }

        $endTime = strtotime($timer->end_time);
        $currentTime = time();
        $timeLeft = $endTime - $currentTime;

        return response()->json(['timeLeft' => $timeLeft]);
    }
}
