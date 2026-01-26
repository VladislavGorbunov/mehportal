<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Executor;
use App\Mail\CustomerRegistration;
use Illuminate\Support\Facades\Mail;

class CronController extends Controller
{
    public function sendEndPremium() 
    {
        $executors = Executor::where('id', 11)->where('premium', true)->first();
        $end_date = date("Y-m-d", strtotime($executors->premium_end_date));
        $now_date = date("Y-m-d");

        if ($end_date <= $now_date) {
            return 'Premium end';
        } else {
            return '-';
        }
    
    }
}