<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function checkReport()
    {
        return view('pages.check-report');
    }
}
