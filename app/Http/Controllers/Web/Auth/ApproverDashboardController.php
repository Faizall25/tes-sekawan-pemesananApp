<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApproverDashboardController extends Controller
{
    public function index()
    {
        return view('Approver.dashboard');
    }
}
