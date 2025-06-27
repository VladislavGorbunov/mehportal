<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    //
    public function index()
    {
        $customer_id = Auth::guard('admin')->user()->id;

        $res = DB::select("SELECT @@event_scheduler");

        foreach ($res[0] as $r) {
            $data['event_scheduler'] = $r;
        }

        return view('admin.index', $data);
    }

}
