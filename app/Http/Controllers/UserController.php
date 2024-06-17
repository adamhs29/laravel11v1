<?php

namespace App\Http\Controllers;

use Illuminate\Database\Console\DbCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index()
    {
        $user = DB::table('users')->first();
        return $user->name;        
    }
}
