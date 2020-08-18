<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {      $page=['title'=>'home'];
        return view('index', compact('page'));
    }

    public function about()
    {      $page=['title'=>'about'];
        return view('about', compact('page'));
    }

    public function admission()
    {      $page=['title'=>'admission'];
        return view('admission', compact('page'));
    }

    public function contact()
    {      $page=['title'=>'contact'];
        return view('contact', compact('page'));
    }

    public function curriculum()
    {      $page=['title'=>'curriculum'];
        return view('curriculum', compact('page'));
    }

    public function emergency_contact()
    {      $page=['title'=>'emergency_contact'];
        return view('emergency_contact', compact('page'));
    }

    public function health()
    {      $page=['title'=>'health'];
        return view('health', compact('page'));
    }

    public function parents_guardians()
    {      $page=['title'=>'parents_guardians'];
        return view('parents_guardians', compact('page'));
    }
    public function admin_dashboard()
    {      $page=['title'=>'admin.dashboard'];
        return view('admin.dashboard', compact('page'));
    }
}
