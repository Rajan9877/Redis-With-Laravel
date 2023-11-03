<?php

namespace App\Http\Controllers;

use App\Jobs\MyJob;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        dispatch(new MyJob());
        return 'Job dispatched to the queue successfully.';
    }
}
