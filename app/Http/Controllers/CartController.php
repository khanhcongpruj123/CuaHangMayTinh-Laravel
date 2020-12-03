<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index() {
        $list_laptop = DB::select("SELECT * FROM table_cart, table_laptop WHERE table_cart.laptop_id = table_laptop.id");
        return view("cart", ["list_laptop" => $list_laptop]);
    }
}
