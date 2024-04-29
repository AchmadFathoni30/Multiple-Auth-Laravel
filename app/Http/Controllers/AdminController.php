<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function DashboardMarketing()
    {
        echo "Halo selamat datang di halaman Marketing";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }

    public function DashboardOperator()
    {
        echo "Halo selamat datang di halaman Operator";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }

    public function DashboardKeuangan()
    {
        echo "Halo selamat datang di halaman Keuangan";
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout</a>";
    }

    public function index()
    {
        return view('Admin');
    }
}
