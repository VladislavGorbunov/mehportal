<?php

namespace App\Http\Controllers\Executor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Executor;

class IndexController extends Controller
{
    //
    public function index()
    {
        $executor_id = Auth::guard('executor')->user()->id;
        $data['company'] = Executor::find($executor_id)->executorCompanies;
        $data['executor'] = Executor::where('id', $executor_id)->first();
        return view('executor.index', $data);
    }

}
