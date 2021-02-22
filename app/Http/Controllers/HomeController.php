<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        if(Auth::check()) {
            switch (Auth::user()->privileges) {
                case 'sadmin':
                    return Inertia::render('SAdmin/UsersAdmin/Index', [
                        'userData' => Auth::user(),
                        'rolName' => 'Super Administrador'
                    ]);
                    break;
                
                default:
                    echo "Fails";
                    break;
            }
        }
        else 
        {
            return Inertia::render('Forbiden');
        }
    }
}
