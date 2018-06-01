<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
      public function index()
    {
        $users = DB::table('users')->simplePaginate(2);

        return view('user.index', ['users' => $users]);
    }
}

