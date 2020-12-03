<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    function index() {
        $list_order = DB::select("SELECT * FROM table_order, table_laptop WHERE table_order.laptop_id = table_laptop.id");
        return view('order', ["list_order" => $list_order]);
    }
}
