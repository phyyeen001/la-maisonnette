<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Admission;
use App\Emergency_Contact_Info;
use App\Health;
use App\ParentsGuardians;
use App\Testimonial;
use Artisan;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {      $page=['title'=>'home'];
        $testimonials=Testimonial::all();
        return view('index', compact('page','testimonials'));
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
        return view('emergency-contact', compact('page'));
    }

    public function health()
    {      $page=['title'=>'health'];
        return view('health', compact('page'));
    }

    public function parents_guardians()
    {      $page=['title'=>'parents_guardians'];
        return view('parents-guardians', compact('page'));
    }
    public function admin_dashboard()
    {      $page=['title'=>'admin.dashboard'];
        $contacts=Contact::all();
$admissions=Admission::all();
$emergency_contacts=Emergency_Contact_Info::all();
$health=Health::all();
$parents_guardians=ParentsGuardians::all();
$testimonials=Testimonial::all();
        return view('admin.index', compact('page','contacts','admissions','emergency_contacts','health',
        'parents_guardians','testimonials'));
    }
    public function all(){
     $storage=   Artisan::call('storage:link');
     $migrate=   Artisan::call('migrate --seed --force');
return ['storage'=>$storage, 'migration'=>$migrate];
    }
}
