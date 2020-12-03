<?php

namespace App\Http\Controllers;

require_once('LoginManager.php');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LoginManager\LoginManager as LoginManager;

class HomeController extends Controller
{

    private $user;

    public function index(Request $req)
    {
        $data = $req->input();
        $list_laptop = DB::select("select * from table_laptop");
        // try {
        //     $this->user = $data["user"];
        // } catch (\Throwable $th) {
        //     $this->user = NULL;
        // }
    	return view("home", ["list_laptop" => $list_laptop]);
    }

    public function addCart(Request $req)
    {
        $data = $req->input();
        // var_dump($data);
        // if ($this->user == NULL)
        // {

        //     return redirect()->route("login");
        // }
        // else
        // {
            try {
                DB::insert('insert into table_cart(user_id, laptop_id) values (?, ?)', [0, $data["id"]]);
            } catch (\Throwable $th) {

            }
            return redirect()->route("home");
        // }
    }
}
