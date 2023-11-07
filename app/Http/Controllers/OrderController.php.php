<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    public function order() {
        return view('dashboard.allorder'); // Change the view name to 'dashboard.allorder'
    }
}
