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
        $drivers = Driver::take(5)->get();
        $messages = Message::take(5)->get();
        return view('admin.index', compact('userCount', 'articleCount', 'pesanCount', 'driverCount', 'drivers', 'messages'));
    }
}
