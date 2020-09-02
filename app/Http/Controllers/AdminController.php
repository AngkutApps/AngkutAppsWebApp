<?php

namespace App\Http\Controllers;

use App\Articel;
use App\Driver;
use App\Message;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $userCount = User::all()->count();
        $articleCount = Articel::all()->count();
        $pesanCount = Message::all()->count();
        $driverCount = Driver::all()->count();
        return view('admin.index', compact('userCount', 'articleCount', 'pesanCount', 'driverCount'));
    }
}
