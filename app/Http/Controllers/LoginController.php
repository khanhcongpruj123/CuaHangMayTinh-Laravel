<?php

namespace App\Http\Controllers;

include('LoginManager.php');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LoginManager\LoginManager;

class LoginController extends Controller
{
    public function index() {
    	return view('login');
    }

    public function checkLogin(Request $req)
    {
        $username = $req->input("username");
        $password = $req->input("password");

        $user = DB::select("SELECT * FROM table_user WHERE username = '{$username}' AND password = '{$password}'");
        if (count($user) !== 0) {
            // LoginManager::getInstance()->set_user($user[0]);
            // var_dump(LoginManager::getInstance());
            return redirect()->route("home");
        }
        else return redirect()->route("login");
    }
}
