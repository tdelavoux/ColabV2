<?php

namespace App\Http\Controllers\AppControllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function execute()
    {
        return view('AppViews.index');
    }
}