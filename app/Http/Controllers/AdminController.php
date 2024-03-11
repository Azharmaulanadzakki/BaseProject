<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mapel;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $adminCount = User::where('role', 'admin')->count();
        $userCount  = User::where('role', 'user')->count();
        
        return view('admin.dashboard', [
            'adminCount' => $adminCount,
            'userCount'  => $userCount,
        ]);
    }
    
    public function dashboard() {
        return view('admin.dashboard');
    }
}